
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sidebar Menu for Admin Dashboard | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Mansalva&display=swap');
        
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .sidebar {
            position: fixed;
            height: 100%;
            width: 260px;
            background: #FFD1D1;
            padding: 15px;
            transition: all 0.3s ease;
            z-index: 1000;
            left: 0; /* Mengatur posisi sidebar di kiri */
        }
        .sidebar.close {
            transform: translateX(-100%); /* Menggeser sidebar keluar layar */
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            font-size: 23px;
            font-weight: bold;
            font-family: 'Mansalva', cursive;
            color: #A87676;
            transform: rotate(-3deg);
            display: inline-block;
        }
        .sidebar a {
            color: #A87676;
            text-decoration: none;
        }
        .menu-content {
            position: relative;
            height: 100%;
            width: 100%;
            overflow-y: scroll;
        }
        .menu-content::-webkit-scrollbar {
            display: none;
        }
        .menu-items {
            list-style: none;
            height: 100%;
            width: 100%;
            transition: all 0.4s ease;
        }
        .submenu-active .menu-items {
            transform: translateX(-56%);
        }
        .menu-title {
            color: #A87676;    /* tulisan dashboard */
            font-size: 20px;
            padding: 15px 20px;
        }
        .item a {
            padding: 16px;
            display: block;
            border-radius: 12px;
        }
        .item a:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 260px;
            width: calc(100% - 260px);
            background: #FAEDCB;
            padding: 15px 20px;
            font-size: 25px;
            transition: all 0.3s ease;
            z-index: 1000;
            color: #A87676;   /* warna garis tiga navside */
        }
        .sidebar.close ~ .navbar {
            left: 0; /* Mengatur navbar untuk menyesuaikan dengan sidebar yang bersembunyi */
            width: 100%; /* Mengatur lebar navbar agar penuh saat sidebar bersembunyi */
        }
        .fa-bars {
            color: #A87676; /* Warna ikon garis tiga menjadi #A87676 */
            cursor: pointer;
        }
        .main {
            margin-left: 260px;
            padding: 80px 20px 20px 20px;
            transition: all 0.3s ease;
            background: #fffdf7;
            min-height: 100vh;
        }
        .sidebar.close ~ .main {
            margin-left: 0; /* Mengatur konten utama untuk menyesuaikan dengan sidebar yang bersembunyi */
        }
.form-group {
  margin-bottom: 20px;
  width: 80%; /* Lebih lebar */
  margin-left: auto; /* Menempatkan elemen ke kanan */
  margin-right: auto; /* Menempatkan elemen ke kiri */
}

.form-group label {
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group textarea {
  width: 100%;
  height: 300px; /* Increased height */
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.btn-group {
  display: flex;
  justify-content: center;
  gap: 10px;
}

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.btn-edit {
  background-color: #ff69b4; /* Warna pink Barbie */
  color: #fff;
}

.btn-save {
  background-color: #ffd966; /* Warna kuning soft */
  color: #fff;
}

.btn-delete {
  background-color: #dc3545;
  color: #fff;
}
</style>
</head>

<body>
    <nav class="sidebar">
        <div class="logo-container">
            <a href="#" class="logo">NONARIWA</a>
            <a href="#" class="logo">BEAUTY</a>
        </div>
        <div class="menu-content">
            <ul class="menu-items">
            <li class="item">
                    <a href="dashboard_admin.php">Dashboard</a>
                </li>
                <li class="item">
                    <a href="about_admin.php">About</a>
                </li>
                <li class="item">
                    <a href="ourgallery_admin.php">Our Gallery</a>
                </li>
                <li class="item">
                    <a href="review_admin.php">Review</a>
                </li>
                <li class="item">
                    <a href="booking_admin.php">Booking</a>
                </li>
                <li class="item">
                    <a href="sale_admin.php">Sale</a>
                </li>
                <li class="item">
                    <a href="../login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>
    
<div class="main">
  <h2 style="font-family: 'Mansalva', cursive; color: #A87676; text-align: center;">Hey Admins, Time for a Change!</h2>
  <div class="section">
    <form id="edit-form">
      <div class="form-group">
        <label for="about-text">About Us Text:</label>
        <textarea
          id="about-text"
          name="about-text"
          placeholder="Enter text for About Us page..."></textarea>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-edit" onclick="editText()">
          Edit
        </button>
        <button type="submit" class="btn btn-save">Save</button>
        <button type="button" class="btn btn-delete" onclick="deleteText()">
          Delete
        </button>
      </div>
    </form>
  </div>
</div>

<script src="script.js"></script>
    <script>
        const sidebar = document.querySelector(".sidebar");
        const sidebarClose = document.querySelector("#sidebar-close");
        const menu = document.querySelector(".menu-content");
        const menuItems = document.querySelectorAll(".submenu-item");
        const subMenuTitles = document.querySelectorAll(".submenu .menu-title");
        sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));
        menuItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                menu.classList.add("submenu-active");
                item.classList.add("show-submenu");
                menuItems.forEach((item2, index2) => {
                    if (index !== index2) {
                        item2.classList.remove("show-submenu");
                    }
                });
            });
        });
        subMenuTitles.forEach((title) => {
            title.addEventListener("click", () => {
                menu.classList.remove("submenu-active");
            });
        });
    </script>
</body>
</html>
