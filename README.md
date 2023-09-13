# Symfony Booking Flight

## Project Description

Symfony Booking Flight is an Enterprise Resource Planning (ERP) system designed to manage airline services. It combines various services into one platform, including ticket booking, check-in, and more. This system provides two independent web interfaces—one for customers and another for staff.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Project Structure](#project-structure)
- [UML Class Diagram](#uml-class-diagram)
- [Development Plan](#development-plan)
- [Contributing](#contributing)
- [License](#license)

## Features

### Customer Interface

- **Booking Flights:** Customers can select destinations, choose travel dates, and specify the number of passengers.
- **Flight Details:** Provides information about pricing, available seats, and optional services like meals and luggage.
- **Final Booking:** The final step for booking tickets, followed by email confirmation.
- **Personal Cabinet:** Customers get access to a personal cabinet displaying future and previous flights, account balance, and online check-in services.
- **Optional:** Payment integration with third-party services and social login (e.g., Google, Facebook).

### Staff Interface

- **Role-Based Access:** Staff members have different roles: Gate Manager, Check-in Manager, and Supervisor.
- **Gate Manager:** Registers passenger boarding at the gate using ticket codes.
- **Check-in Manager:** Performs passenger check-in, adds options, and handles luggage fees.
- **Supervisor:** Has all the permissions of the Gate Manager and Check-in Manager, as well as the ability to manage staff, create/cancel flights, and manage options.

### ERP Entities

- **Flight:** Information about flights.
- **Passenger:** Passenger details.
- **Airplane:** Information about airplanes.
- **Seat Type:** Types of seats available.
- **Option:** Additional services and options.
- **Ticket:** Details of issued tickets.
- **Discount:** Discounts applied.

## Installation

To run this application locally, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/symfony-booking-flight.git
      ```
Navigate to the project directory:

   ```bash

  cd symfony-booking-flight
   ```
Install dependencies:

   ```bash

composer install
   ```
Configure your PostgreSQL database connection in .env.

Start Docker containers (for virtualization):

   ```bash

docker-compose up -d
   ```
Run migrations:

   ```bash

php bin/console doctrine:migrations:migrate
   ```
Start the Symfony development server:

   ```bash

symfony server:start
   ```
Access the application in your web browser at http://localhost:8000.

Project Structure
The project follows a typical Symfony application structure with an additional staff interface implemented using EasyAdmin.

src/: Contains application source code.
config/: Configuration files.
public/: Publicly accessible assets like CSS, JavaScript, and uploaded files.
var/: Temporary files and cache.
vendor/: Composer dependencies.
bin/: Console commands and scripts.
tests/: Unit and functional tests.
assets/: Frontend assets (Webpack, Bootstrap).
docker/: Docker configuration files.
admin/: EasyAdmin configuration files.
UML Class Diagram
UML Class Diagram

Insert your UML class diagram here to provide an overview of the application's architecture.

Development Plan
Customer Interface: Implement the customer interface for flight booking.
Staff Roles: Set up role-based access control for staff members.
Staff Interface: Create the staff interface with Gate Manager, Check-in Manager, and Supervisor roles.
ERP Entities: Define and implement the core entities for the ERP system.
Payment Integration: Integrate payment processing for ticket purchases.
Social Login: Implement social login options for customers.
Email Notifications: Add email notifications for booking confirmations.
Background Task Queue: Set up Symfony Messenger for background tasks.
API Documentation: Document the API for external access.
Testing: Write unit and functional tests.
Contributing
Contributions to this project are welcome. Please follow the contributing guidelines for details on how to contribute.

License
This project is licensed under the MIT License.

