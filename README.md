# blood_bank

'Blood bank' web application made with PHP and MySQL  
Check it out at http://34.198.227.114/

## Init Database
- `CREATE USER 'bloodBankAdmin'@'localhost' identified by 'securePassword';`
- `CREATE DATABASE bloodBank CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;`
- `GRANT ALL ON bloodBank.* to 'bloodBankAdmin'@'localhost';`
- `exit;`
- `mysql -u bloodBankAdmin -p bloodBank < mysqlDump.sql`

## Users

- Hospitals
- Recievers (Users in need of Blood)
- Donors

## Functionality

- #### Login Page

  - Single login page for both hospitals and recievers.

- #### Add Info Page

  - Add blood samples to hospital's bank.
  - Only accessible to hospitals.

- #### Available Samples Page
  - Displays all available blood samples along with which hospital has them.
  - Request sample button. Only for recievers.
    - Only one request per reciever can be placed.
    - Recievers can select hospital at which they want.
  - Accessible to everyone.
- #### View Requests Page
  - Hospital can view list of all people who have requested a particular blood group from its bank.
- #### Donate Sample
  - Only accessible to donors where they can donate blood.
  - Donors can select hospital and select appointment date.
  - Only one appointment allowed.
- #### Donations
  - Only accessible to hospitals who can view interested donors and appointment date. 
