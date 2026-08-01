# 🗄️ PHP Database Library Learning Project

[![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![ADOdb](https://img.shields.io/badge/ADOdb-Database%20Abstraction-0A66C2)](https://adodb.org/)
[![Smarty](https://img.shields.io/badge/Smarty-Template%20Engine-F0C040)](https://www.smarty.net/)

A learning repository for exploring PHP database access, database abstraction, and presentation-layer separation using MySQL, ADOdb, and Smarty.

> This project is maintained as an educational codebase. Review the existing source files and dependency versions before using it in production.

---

## Project Overview

This repository demonstrates how PHP applications can separate database access, business logic, and presentation concerns.

The original project focuses on:

- MySQL database connectivity
- ADOdb as a database abstraction layer
- Smarty as a PHP template engine
- Reusable database-oriented application structure

## Learning Objectives

After reviewing this project, learners should be able to:

1. Explain the purpose of a database abstraction layer.
2. Connect PHP applications to relational databases.
3. Separate presentation templates from application logic.
4. Identify where database configuration should be stored.
5. Review legacy PHP code for security and maintainability risks.
6. Plan a migration toward modern PDO, Composer, and environment-based configuration.

## Technology Concepts

| Area | Technology or Concept |
|---|---|
| Programming language | PHP |
| Database | MySQL |
| Database abstraction | ADOdb |
| Template engine | Smarty |
| Architecture | Separation of concerns |
| Learning focus | Database access and reusable PHP structure |

## Getting Started

1. Clone the repository.
2. Inspect the project files and locate the database configuration.
3. Create a local MySQL database matching the project requirements.
4. Update credentials for your local development environment.
5. Run the project through a local PHP-compatible web server.

```bash
git clone https://github.com/PhuminDecOKnoi/my-mysql-lib.git
cd my-mysql-lib
```

Because this is an older learning project, exact setup steps may depend on the files and dependency versions currently stored in the repository.

## Security Review Checklist

Before reusing the code, verify that:

- Database credentials are not committed to source control.
- SQL statements use parameter binding.
- User input is validated and normalized.
- HTML output is escaped in templates.
- Error messages do not expose sensitive information.
- Sessions and authentication controls are configured securely.
- Dependencies are still supported and free from known vulnerabilities.

## Modernization Path

A modernized version of this project could include:

- Composer dependency management
- PDO with prepared statements
- Environment variables through a `.env` file
- PSR-4 autoloading
- Service and repository layers
- Automated tests
- Static analysis
- PHP 8.x type declarations

## Intended Audience

- PHP beginners
- Students learning database-driven web applications
- Developers reviewing legacy PHP architecture
- Instructors teaching database abstraction and template separation

## Search Topics

`php` · `mysql` · `adodb` · `smarty` · `database-abstraction` · `template-engine` · `php-learning` · `web-development`

## Author

Maintained by [PhuminDecOKnoi](https://github.com/PhuminDecOKnoi).

## License

No license statement is asserted here unless a license file exists in the repository. Review the repository contents before reuse or redistribution.
