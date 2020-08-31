<h2><b>Web Bán Hàng Laravel Làm Theo Mô Hình MVC</b></h2>
<h3><b>Giao Diện Người Dùng</b></h3>
<h4>Sử Dụng Bootstrap 4 Để Tạo Giao Diện Người Dùng </h4>
<h4>Tông Màu Chủ Đạo Của Trang Web Là Màu Light Và Primary</h4>

<h5 align="center">Trang Chủ Web Bán Hàng Laravel</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694009-26650d80-eb96-11ea-814a-67b1745d75c0.png">

<h5 align="center">Sản Phẩm Mới</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694051-37158380-eb96-11ea-8dd9-dd13354f6ffe.png">

<h5 align="center">Danh Mục Sản Phẩm</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694121-56acac00-eb96-11ea-9e82-d779fd08982f.png">
<p>Danh mục sản phẩm: đưa ra những sản phẩm có trong danh mục</p>

<h5 align="center">Chi Tiết Sản Phẩm</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694145-61ffd780-eb96-11ea-98ae-7daca2ff7d84.png">
<p>Chi tiết sản phẩm: liệt kê những thành phần có trong sản phẩm  mã Id của sản phẩm bao gồm số lượng sản phẩm có trong kho</p>

<h5 align="center">Giỏ Hàng</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694173-6deb9980-eb96-11ea-9eac-61b24801f205.png">
<p>Giỏ Hàng: cho phép người dùng cập nhập số lượng trước khi thanh toán và nhập mã giảm giá</p>
<p><i>Lưu ý:: người dùng phải đăng nhập trước khi thanh toán </i></p>

<h5 align="center">Đăng Nhập</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694198-747a1100-eb96-11ea-872e-bdabf0d7a94a.png">
<p>Đăng Nhập: cho phép người dùng đăng nhập,nếu chưa có thì có thể chuyển qua đăng ký</p>

<h5 align="center">Đăng Kí</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694231-8065d300-eb96-11ea-9e96-555e6d428f6f.png">
<p>Đăng Ký: người dùng có thể đăng kí và chọn hình ảnh mình muốn làm ảnh đại diện</p>

<h5 align="center">Thông Tin Cá Nhân Người Dùng</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694266-8fe51c00-eb96-11ea-9baf-f0b8302047ad.png">
<p>Thông tin cá nhân: cho phép người dùng chỉnh sửa hình ảnh và thông tin người dùng</p>

<h5 align="center">Chi Tiết Đơn Hàng Người Mua</h5>
<img src="https://user-images.githubusercontent.com/69857895/91694283-97a4c080-eb96-11ea-9d33-97de6407ed05.png">
<p>Chi tiết đơn hàng: người dùng có thể xem chi tiết đơn hàng của mình và có thể hủy đơn hàng khi đang ở trạng thái đang xử lý</p>

<h3><b>Giao Diện Quản Lý</b></h3>
<h4>Ở Giao Diện Quản Lý Này Mình Phân Quyền Cho 3 Nhóm: Admin,Author,User</h4>
<h5>Admin: quản lý user và author</h5>
<h5>Author: quản lý tất cả nhưng không có quyền như admin</h5>
<h5>User: là người đăng sản phẩm và danh mục sản phẩm chỉ cho phép đăng sản phẩm và danh mục sản phẩm</h5>

<h4>Giao Diện Khi User Đăng Nhập Vào</h4>
<img src="https://user-images.githubusercontent.com/69857895/91694349-a8edcd00-eb96-11ea-8b3d-4b810358ed7f.png">
<h5 align="center">Danh Mục Sản Phẩm</h5>
<img src="https://user-images.githubusercontent.com/69857895/91699128-06394c80-eb9e-11ea-9d80-90856bd82ab2.png">
<p>Cho phép thêm danh mục sản phẩm</p>
<img src="https://user-images.githubusercontent.com/69857895/91699348-5e704e80-eb9e-11ea-8804-ea85c31c8715.png">
<p>Cho phép xem và cập nhập trạng thái danh mục sản phẩm</p>
<h5 align="center">Sản Phẩm</h5>
<img src="https://user-images.githubusercontent.com/69857895/91699473-8bbcfc80-eb9e-11ea-98bc-13e2e58088cb.png">
<p>Cho phép thêm sản phẩm</p>
<img src="https://user-images.githubusercontent.com/69857895/91699492-95defb00-eb9e-11ea-987d-e7f23b62040c.png">
<p>Cho phép xem và cập nhập trạng thái sản phẩm</p>

<h4>Giao Diện Khi Author Đăng Nhập Vào</h4>
<img src="https://user-images.githubusercontent.com/69857895/91694435-b99e4300-eb96-11ea-896f-474a01750d70.png">
<h5 align="center">Tất Cả Đơn Hàng Khách Hàng Đã Đặt</h5>
<img src="https://user-images.githubusercontent.com/69857895/91699546-a55e4400-eb9e-11ea-83aa-b0b6a1c805eb.png">
<p>Cho phép xem là chỉnh sửa trạng thái đơn hàng</p>
<img src="https://user-images.githubusercontent.com/69857895/91700009-5d8bec80-eb9f-11ea-8b52-65e30defeefb.png">
<img src="https://user-images.githubusercontent.com/69857895/91700030-67155480-eb9f-11ea-8261-de9c2888b602.png">

<h4>Giao Diện Khi Admin Đăng Nhập Vào</h4>
<img src="https://user-images.githubusercontent.com/69857895/91694307-a0959200-eb96-11ea-9753-43b721fb216d.png">
<h5 align="center">THêm Người Quản Lý</h5>
<img src="https://user-images.githubusercontent.com/69857895/91700775-92e50a00-eba0-11ea-876f-1f0a884decbb.png">
<h5 align="center">Liệt Kê</h5>
<img src="https://user-images.githubusercontent.com/69857895/91700809-9d9f9f00-eba0-11ea-9409-b8aa172562f5.png">
<p>Cho phép phân quyền user và author</p>


<h1 align="center">The End</h1>




