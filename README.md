# portfolio
A portfolio website showcasing skills and info

## Project Setup Instructions (WAMP/XAMPP)

### Prerequisites
- Download and install [WAMP](https://www.wampserver.com/en/) or [XAMPP](https://www.apachefriends.org/index.html) for your operating system.
- Make sure PHP and Apache are enabled in your server control panel.

### Step 1: Clone or Download the Project
- Download this repository as a ZIP and extract it, or clone it using Git:
  ```sh
  git clone <repository-url>
  ```

### Step 2: Move Project to Server Directory
- For **WAMP**: Move the `PORTFOLIO WEBSITE` folder into `C:/wamp64/www/`.
- For **XAMPP**: Move the `PORTFOLIO WEBSITE` folder into `C:/xampp/htdocs/`.

### Step 3: Start Apache Server
- Open WAMP/XAMPP control panel and start the Apache service.

### Step 4: Access the Website
- Open your browser and go to:
  - **WAMP**: `http://localhost/PORTFOLIO%20WEBSITE/`
  - **XAMPP**: `http://localhost/PORTFOLIO%20WEBSITE/`

### Step 5 (Optional): Edit or Update Content
- Edit files in the `includes/` folder to update sections like About, Projects, Skills, and Contact.
- Add or update images in `assets/images/` and your CV in `assets/files/`.

### Step 6 (Optional): Using Node.js Tools
- If you want to use Tailwind CSS or build tools, install Node.js and run:
  ```sh
  cd "PORTFOLIO WEBSITE"
  npm install
  npm run dev
  ```
- This will start a development server (usually at `http://localhost:5173/`).

---
For any issues, check your server logs or ensure all dependencies are installed.
