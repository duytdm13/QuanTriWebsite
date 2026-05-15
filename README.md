# 👕 Brofit – Hướng Dẫn Cài Đặt & Tài Khoản Demo


## 📋 Yêu Cầu Hệ Thống

| Phần mềm | Phiên bản | Link tải |
|---|---|---|
| XAMPP | 8.1+ | [apachefriends.org](https://www.apachefriends.org) |
| Trình duyệt | Chrome / Firefox | — |

---

## ⚙️ Hướng Dẫn Cài Đặt

### Bước 1 — Khởi động XAMPP

1. Mở **XAMPP Control Panel**
2. Click **[Start]** cho **Apache**
3. Click **[Start]** cho **MySQL**
4. Kiểm tra: cả hai dòng chuyển sang nền **xanh lá** là thành công ✅

---

### Bước 2 — Copy Source Code

Sao chép thư mục `brofit` vào đúng đường dẫn sau:

```
C:\xampp\htdocs\brofit
```

---

### Bước 3 — Import Database

1. Mở trình duyệt, truy cập: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Tạo database mới:
   - Click tab **"Databases"**
   - Nhập tên: `brofit_db`
   - Collation: `utf8mb4_unicode_ci`
   - Click **[Create]**
3. Chọn database `brofit_db` vừa tạo
4. Click tab **"Import"**
5. Chọn file: `database/brofit_db.sql`
6. Click **[Go]** ✅

---

### Bước 4 — Kiểm Tra `wp-config.php` (nếu cần)

Mở file `htdocs/brofit/wp-config.php` và đảm bảo các dòng sau khớp:

```php
define( 'DB_NAME',     'brofit_db' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
```

> ⚠️ Nếu máy bạn đặt mật khẩu MySQL riêng, hãy điền vào `DB_PASSWORD`.

---

### Bước 5 — Truy Cập Website

| Mục đích | URL |
|---|---|
| 🌐 Trang khách hàng (Frontend) | [http://localhost/brofit](http://localhost/brofit) |
| 🔧 Trang quản trị (Backend) | [http://localhost/brofit/wp-admin](http://localhost/brofit/wp-admin) |

---

## 👥 Danh Sách Tài Khoản Demo

### 🔑 Administrator — Toàn quyền quản trị

| Trường | Giá trị |
|---|---|
| URL đăng nhập | http://localhost/brofit/wp-admin |
| Username | `admin` |
| Password | `Admin@123456` |

---

### ✏️ Editor — Quản lý nội dung

| Trường | Giá trị |
|---|---|
| Username | `editor01` |
| Password | `Editor@123` |

---

### 📝 Author — Tác giả

| Trường | Giá trị |
|---|---|
| Username | `author01` |
| Password | `Author@123` |

---

### 🛒 Customer — Khách hàng (đã có đơn hàng mẫu)

| Trường | Giá trị |
|---|---|
| Username | `customer01` |
| Password | `Customer@123` |

> 💡 Dùng tài khoản `customer01` để xem lịch sử đơn hàng mẫu.  
> Phương thức thanh toán demo: **Chuyển khoản ngân hàng (COD)**

## 🔄 Cách Export Database (để backup hoặc nộp bài)

```
1. Mở http://localhost/phpmyadmin
2. Chọn database: brofit_db
3. Click tab "Export"
4. Format: SQL
5. Click [Go] → Lưu file .sql
```

---

## ❓ Xử Lý Lỗi Thường Gặp

| Lỗi | Nguyên nhân | Cách xử lý |
|---|---|---|
| Trang trắng (White Screen) | Lỗi PHP hoặc plugin | Bật `WP_DEBUG` trong wp-config.php |
| `Failed to open wp-includes/version.php` | Copy WordPress không đầy đủ | Xóa sạch thư mục, copy lại toàn bộ file WordPress |
| Không vào được wp-admin | Sai URL hoặc database chưa import | Kiểm tra lại Bước 3 & 4 |
| Port 80 bị chiếm | Skype / IIS đang dùng port 80 | Tắt ứng dụng đó hoặc đổi port Apache trong XAMPP |
| Ảnh không hiển thị | Đường dẫn media sai | Vào Settings → Media → Lưu lại |
| "Invalid payment method" | Chưa bật payment | WooCommerce → Settings → Payments → Enable |
| "Store coming soon" | Chưa tắt chế độ coming soon | WooCommerce → Settings → Site visibility → Live |

---

*© 2026 BroFit – Bài tập nhóm môn Quản Trị Website. Xây dựng bằng WordPress & WooCommerce.*
