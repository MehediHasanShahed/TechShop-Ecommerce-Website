# 🛍️ E-Commerce Web Application

A modern, full-featured **eCommerce platform** built with **PHP**, **Bootstrap**, and **TCPDF**.
This project demonstrates end-to-end shopping flow — from product browsing to checkout and **PDF invoice generation** — with clean, modular code and responsive UI design.

---

## ✨ Key Features

* **Product Catalog** — Displays categorized items such as phones, laptops, and gadgets.
* **Dynamic Cart System** — Add, update, and remove products seamlessly using PHP sessions.
* **Checkout & Billing** — View real-time cart totals and proceed to order confirmation.
* **PDF Invoice Generator** — Automatically generates and downloads an invoice using **TCPDF**.
* **Responsive Design** — Fully mobile-friendly layout powered by **Bootstrap 5**.
* **Lightweight Architecture** — Simple PHP backend without heavy frameworks, perfect for learning or small projects.

---

## 🧩 Tech Stack

| Layer                     | Technology               |
| ------------------------- | ------------------------ |
| **Frontend**              | HTML5, CSS3, Bootstrap 5 |
| **Backend**               | PHP (Procedural)         |
| **Libraries**             | TCPDF (PDF generation)   |
| **Dependency Management** | Composer                 |
| **Server Environment**    | XAMPP / WAMP / LAMP      |

---

## 📂 Folder Structure

```
ecommerce/
│
├── index.php               # Homepage
├── add_to_cart.php         # Add product to shopping cart
├── cart.php                # View and manage cart
├── checkout_page.php       # Checkout summary and user details
├── checkout.php            # Generate and download invoice (PDF)
├── clear_cart.php          # Empty the shopping cart
│
├── gadget.php              # Gadget category page
├── laptop.php              # Laptop category page
├── phone.php               # Phone category page
│
├── style.css               # Custom CSS
├── css/                    # Bootstrap styles
├── js/                     # Bootstrap scripts
├── Image/                  # Product images
│
├── vendor/                 # Composer dependencies
│   └── tecnickcom/tcpdf    # PDF generator library
│
├── composer.json           # Project dependencies
└── composer.lock
```

---

## ⚙️ Installation & Setup

1. **Clone or download** the repository into your server directory:

   ```bash
   C:\xampp\htdocs\ecommerce
   ```
2. **Install Composer dependencies** (if not already included):

   ```bash
   composer install
   ```
3. **Start Apache and MySQL** using XAMPP (or your preferred stack).
4. Visit in your browser:

   ```
   http://localhost/ecommerce/
   ```

---

## 🧠 How It Works

1. **Browse products** from different categories.
2. **Add items to cart**, managed by PHP session variables.
3. **Proceed to checkout** to review your selections and total cost.
4. **Click “Download Invoice”** — the system will generate a real PDF invoice using **TCPDF**.

---

## 🔒 Code Quality & Architecture

* Separation of concerns between **UI (HTML/CSS)**, **business logic (PHP)**, and **data**.
* Uses **Composer autoloading** for dependencies.
* **Session-based cart logic** ensures persistent state during browsing.
* Easily extensible for adding database integration or authentication.

---

## 📸 Screenshots


* Homepage<img width="1878" height="923" alt="image" src="https://github.com/user-attachments/assets/498f9dfe-41b4-47bf-b881-8ca8fb7835e4" />
* Cart view<img width="1878" height="923" alt="image" src="https://github.com/user-attachments/assets/dd40a915-ae38-4482-9aa3-4f57b7592817" />
* Checkout summary<img width="1878" height="923" alt="image" src="https://github.com/user-attachments/assets/b5d2aae4-7d56-4e3c-bf0e-4c31014b9960" />
* Example PDF invoice<img width="1878" height="923" alt="image" src="https://github.com/user-attachments/assets/4c454a69-d2ff-45ed-aa8f-3dbce4fc5c20" />


---

## 💡 Future Improvements

* Database integration for persistent cart & user data
* Admin panel for managing products and orders
* User authentication and order history
* API-based product management

---

## 👨‍💻 Author

**Mehedi Hasan**
📧 mehedihasanshahed3@gmail.com
💼 Software Developer | Web Engineer | PHP & JavaScript Enthusiast

---

## 🪪 License

This project is open source and available under the [MIT License](LICENSE).
