- Thẻ ```html<frame scr = "...">``` -> dùng để lấy dữ liệu trang khác

- Tag nào tạo ra 1 drop-down list? 

A. ```<input type="list"> ```

B. ```<input type="dropdown">```

C. ```<list>```

D. ```<select>```

-> Đáp án đúng là: D. ```<select>```

```html
<select name="fruit">
  <option value="apple">Apple</option>
  <option value="banana">Banana</option>
  <option value="cherry">Cherry</option>
</select>
```
- Đâu không phải là phép toán không dùng để so sánh trong PHP?

A. ```===```

B. ```!=```

C. ```<===>```

D. ```>=```

-> Đáp án đúng là: C. ```<===>```

- Bộ khung nào dùng để điều khiển hiển thị các khung riêng lẻ để tạo trang web? 

A. Trang web

B. Kết quả khác

C. Frameset

D. Frames

-> Đáp án đúng là: C. Frameset

- Câu phát biểu nào là đúng? 

A. Frame trong suốt đối với người dùng

B. Để thay đổi thuộc tính src của Frame, sử dụng properties của Frame

C. Frame được tạo ra nhờ các đối tượng của Form

D. Để thay đổi thuộc tính src của frame, sử dụng properties của Frameset

-> Đáp án đúng là: B. Để thay đổi thuộc tính src của Frame, sử dụng properties của Frame

- Trong một frameset có ít nhất là **1** frame.

- Trong Javascirpt, sự kiện **onClick** thực hiện -> khi click vào 1 đối tượng trong form
    - **onblur** -> khi đối tượng trong form mất focus
    - **onfocus** -> khi đối tượng trong form có focus
- Trong Javascript sự kiện **onload** được thực hiện -> khi bắt đầu chương trình chạy

- Trong Javascript sự kiện **OnMouseOver** được thực hiện -> khi di chuyển con chuột qua 1 đối tượng trong form

- Trong Javascript sự kiện **onUnload** thực hiện -> khi kết thúc một chương trình

- Làm sao để khởi động JavaScript trong HTML? -> ```<script> ... </script>``` 

- Cho đoạn code:
```
var n = 6;
m = n;
switch(n){
    case 5:
    case 6:
    case 7:
        m = n >> 1;
        break;
    case 8:
        m = n << 1;
}
document.write("m = ", m);
```
-> m =3


- Chức năng chuyển 1 mảng thành 1 chuỗi là chức năng của hàm **implode**
    - **explode()** làm ngược lại: chuyển chuỗi thành mảng
```php
$arr = ["PHP","HTML"];
$str = implode(", ",$arr);

$chuoi = "apple,banana,orange";
$mang = explode(",",$chuoi);
```
- Đâu là chú thích được dùng trong PHP? 

A. /* commented code here */ 

B. // you are handsome 

C. # you are gay 

D. Tất cả đều đúng

-> Đáp án đúng: D. Tất cả đều đúng

- Trong PHP, cách lưu biến tên age có giá trị 28 trong phiên làm việc (session) là gì?

A. $_SESSION['age'] = 28;

B. session_register('age');

C. $HTTP_SESSION_VARS['age'] = 28;

D. session_start('age', 28);

-> Đáp án đúng: A. $_SESSION['age'] = 28;

- Làm sao để truy cập vào một thuộc tính trong class thông qua $this trong PHP?
-> ```$this->varname```

- Làm thế nào để sử dụng session trong PHP
-> gọi hàm **session_start()**

- Cách nào giúp bạn nhận được dữ liệu được gửi đi từ Form mà không chắc chắn cơ chế được gửi đi như thế nào?

-> ```$_REQUEST[]```

- Phát biểu nào sau đây SAI về phương thức __construct()?

A. __construct() được đặt tên trùng với tên class

B. __construct() phải có tham số được truyền

C. __construct() thường dùng để khởi tạo giá trị ban đầu, các trường hợp gọi __construct()

D. __construct() được gọi tự động và được gọi đầu tiên khi một object được khởi tạo

-> Đáp án: B


- Lệnh **prompt()** trong Javascript dùng để -> Hiện 1 thông báo nhập thông tin

- Hàm **alert()** dùng để -> hiển 1 thông báo

- Phương thức viết chương trình của JS như thế nào
-> Viết riêng 1 trang hoặc chung với HTML
- Sử dụng từ khoá nào để đặt tên mới cho 1 cột trong bảng của câu lệnh SQL
-> AS

- Làm sao để hiển thị các dòng không trùng lặp (loại bỏ kết quả bị lặp)?

A. ONLY 

B. ANY 

C. DISTINCT 

D. ALL

-> Đáp án đúng là C

- **SQL** là viết tắt của **Structured Query Language**

- **IAP** được viết tắt của từ -> **Internet Access Provider**

- **ISP** được viết tắt của từ -> **Internet Service Provider**

- Cho bảng user gồm các cột: id, firstname, lastname, email. Sử dụng cụm name = firstname + khoảng trống + lastname thì nên dùng câu lệnh nào?
-> ```concat(firstname," ",lastname)```

- Thành phần cơ bản của mô hình xử lý Client/Server gồm những gì?

A. Front end Client 

B. Network

C. Back end Server

D. AllCorrect

-> Đáp án đúng là D