# Garethjorden Administration Site

This project serves as the administration panel for the [Garethjorden Mainsite](https://github.com/kukivac/garethjorden-mainsite). It provides a secure, user-friendly interface for managing the photography portfolio’s content, including image uploads, gallery organization, and other custom configurations. Built atop a custom MVC framework in PHP 8.1, this admin interface offers the flexibility and control needed to keep the main site’s content fresh and well-structured.

## Overview

The administration site is designed with a straightforward and intuitive layout, making it easy to add, edit, and remove photographs, as well as tweak display settings. It integrates seamlessly with the Garethjorden Mainsite, ensuring that updates made here are reflected instantly on the public-facing portfolio.

## Key Features

- **Tight Integration:** Directly controls and configures content for the main site, ensuring rapid updates and consistent presentation.
- **Custom MVC Framework:** Built on a proprietary PHP 8.1 framework that ensures maintainable, scalable architecture.
- **Latte Templating:** Uses Latte for clean and modular templating, simplifying the process of adding new views or adjusting existing ones.
- **SCSS Frontend:** Implements SCSS for maintaining a structured and easily adjustable stylesheet.
- **MySQL Database:** Stores and manages content in a MySQL database for reliable and efficient data handling.
- **Custom Routing & Controllers:** Routes requests through a custom controller-based system, making it straightforward to add new administrative functionalities.

## Technologies Used

- **Backend:** PHP 8.1 (Custom MVC Framework)
- **Templating:** Latte
- **Routing:** Custom controller-based routing
- **Frontend:** SCSS
- **Database:** MySQL

## Getting Started

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/garethjorden-admin.git
   ```

2. **Install Dependencies:**
   Ensure that PHP 8.1 and Composer are installed. Then:
   ```bash
   composer install
   ```

3. **Configuration:**
   - Update the configuration files, typically found in a `config` or `.env` file, to set up database credentials (MySQL host, username, password, and database name).
   - Ensure that your web server points to the project’s public directory (often `public`).
   - Make sure the database is migrated and seeded as required.

4. **Build Styles:**
   Recompile SCSS files if necessary:
   ```bash
   npm install
   npm run build
   ```

5. **Run the Application:**
   Start a local development server or configure your production server accordingly. For quick local testing:
   ```bash
   php -S localhost:8000 -t public
   ```

6. **Access the Administration Panel:**
   Open your browser and go to:
   ```
   http://localhost:8000
   ```

   You should be prompted to log in or otherwise authenticate, depending on your security setup.

## Contributing

Contributions are welcomed! Whether it’s a bug fix, an improvement in the user interface, or adding a new feature, please submit a pull request. Ensure any changes are well-documented and tested before proposing a merge.

## License

This project is licensed under the [MIT License](LICENSE).

---

*Built to streamline content management for Garethjorden Mainsite, this administration panel ensures that updates are seamless, efficient, and easy to manage.*  
