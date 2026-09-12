# StudentHub ER Model

```mermaid
erDiagram
  USERS ||--o{ EVENTS : creates
  USERS ||--o{ REGISTRATIONS : makes
  EVENTS ||--o{ REGISTRATIONS : receives
  USERS ||--o{ AUDIT_LOGS : generates
  USERS { int id PK string name string email UK string password_hash string role }
  STUDENTS { int id PK string name string email UK string course int semester }
  EVENTS { int id PK string title string category date event_date int created_by FK }
  REGISTRATIONS { int id PK int user_id FK int event_id FK }
  AUDIT_LOGS { int id PK int user_id FK string action datetime created_at }
```

`users.email` and `students.email` are unique. `registrations` uses a unique `(user_id, event_id)` pair to prevent duplicate event registration. Foreign keys define ownership and cleanup behaviour.
