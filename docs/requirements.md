# StudentHub requirements

## Roles
- Visitor: view home, about, events, FAQ, contact and feedback pages; register or sign in.
- Student: access dashboard and profile after login.
- Admin: access dashboard, student management, event management and audit log.

## Functional requirements
1. Provide at least 10 linked pages with consistent navigation.
2. Use semantic HTML5 and keyboard-accessible form labels.
3. Use responsive CSS Grid/Flexbox layouts.
4. Provide interactive menu, FAQ, theme toggle and client validation.
5. Fetch JSON event records and support searching.
6. Process contact/registration forms with server-side validation.
7. Create relational schema for users, students, events, registrations and audit logs.
8. Hash passwords, prevent duplicate emails, verify credentials and enforce roles.
9. Provide student and event management pages with basic validation.
10. Expose a JSON endpoint consumed by Fetch.

## Non-functional requirements
- Responsive at mobile, tablet and desktop widths.
- Clear feedback for validation and operation results.
- Reusable stylesheet and shared PHP header/footer.
- Use prepared statements for user-supplied SQL values and escape output.
- Keep credentials out of version control in deployment; use local config.
