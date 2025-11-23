# Commit Guidelines for This Project

To ensure our Git history is clean, consistent, and professional, **all commit messages must follow these rules**.

---

## Commit Message Format

```
<type>(<scope>): <short summary>

<body>

<footer>
```

### Rules:

- **Type** and **Scope** are required.  
- **Scope** should clearly indicate affected module, component, or feature (e.g., auth, user-controller, tasks).  
- **Short summary** must not exceed 80 characters.  
- **Short summary** must start with an uppercase letter.  
- Use **imperative mood**: "Add feature" instead of "Added feature".  
- Leave a blank line between summary and body.  

---

## Allowed Commit Types

| Type     | Description |
|----------|-------------|
| feat     | A new feature |
| fix      | A bug fix |
| docs     | Documentation updates only |
| style    | Formatting, indentation, whitespace, minor style changes |
| refactor | Code changes that neither fix a bug nor add a feature |
| perf     | Performance improvements |
| test     | Adding or updating tests |
| chore    | Build process, tooling, maintenance tasks |
| ci       | Continuous integration or workflow changes |

---

## Examples

```
feat(user-controller): Add search functionality to index method
fix(auth): Correct token expiration handling
docs(readme): Update installation instructions
style(ui): Fix indentation in components
refactor(performance-chart): Simplify data mapping logic
perf(database): Optimize query performance
test(kyc): Add tests for document upload
chore(deps): Update npm packages
ci(workflow): Fix linting step
```

---

## Additional Notes

- Keep summary concise and clear.  
- Include issue references in the footer when applicable (ISSUES CLOSED: #123).  
- Include breaking changes in the footer when applicable (BREAKING CHANGE: description).  
- Always run tests before committing.  

> This guide ensures our Git history is readable, professional, and ready for collaboration.
