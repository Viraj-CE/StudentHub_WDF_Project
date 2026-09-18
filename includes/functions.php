<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function logged_in() { return !empty($_SESSION['user_id']); }
function require_login() { if (!logged_in()) { header('Location: ' . BASE_URL . '/auth/login.php'); exit; } }
function require_role($role) { require_login(); if (($_SESSION['role'] ?? '') !== $role) { http_response_code(403); exit('403 — Access denied'); } }
function csrf_token() { if (empty($_SESSION['csrf'])) $_SESSION['csrf'] = bin2hex(random_bytes(32)); return $_SESSION['csrf']; }
function csrf_check() { if (!hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf'] ?? '')) { http_response_code(419); exit('Invalid request token. Refresh and try again.'); } }
function audit($conn, $action, $details='') { if (!empty($_SESSION['user_id'])) { $s=$conn->prepare('INSERT INTO audit_logs(user_id, action, details) VALUES(?,?,?)'); if($s){$s->bind_param('iss',$_SESSION['user_id'],$action,$details);$s->execute();$s->close();} } }
function session_guard() { if (logged_in() && isset($_SESSION['last_activity']) && time()-$_SESSION['last_activity']>1800) { session_unset(); session_destroy(); header('Location: ' . BASE_URL . '/auth/login.php?expired=1'); exit; } $_SESSION['last_activity']=time(); }
session_guard();
