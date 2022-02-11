<?php include 'app/views/haeder.php'; ?>

<div class="form">
    <form id="signup" action="<?= BASE_URL . 'tai-khoan/luu-cap-nhat' ?>" method="post">
        <div class="inputs">
            <div class="IPemail"><input type="email" name="email" id="email" placeholder=" e-mail" autofocus value=" <?= $model->email ?>" />
                <span id="emailSpan" style="color:red"></span>
            </div>
            <div class="IPname">
                <input type="name" name="name" id="name" placeholder="Name" value=" <?= $model->name ?>" />
                <span id=" nameSpan" style="color:red"></span>
            </div>
            <div class="IPpass">
                <input type="password" name="password" id="password" placeholder="Password" value=" <?= $model->password ?>" />
                <span id=" passSpan" style="color:red"></span>
            </div>
            <button type="submit" id="submit">Cập nhật</button>
        </div>
    </form>

    <script>
        var email = document.querySelector("#email");
        var valEmail = document.querySelector("#emailSpan");
        var ten = document.querySelector("#name");
        var valName = document.querySelector("#nameSpan");
        var pass = document.querySelector("#password");
        var valPass = document.querySelector("#passSpan");
        email.onblur = function() {
            var val1 = this.value;
            var pattern1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var check1 = pattern1.test(val1);
            if (!check1) {
                valEmail.innerText = "Bạn nhập ko đúng email.";
            } else {
                valEmail.innerText = "";
            }

        }
        ten.onblur = function() {
            var val5 = this.value;
            if (val5 === "") {
                valName.innerText = "Nhập tên";
            } else {
                valName.innerText = "";
            }
        }
        pass.onblur = function() {
            var val4 = this.value;
            if (val4 === "") {
                valPass.innerText = "Nhập mật khẩu";
            } else {
                valPass.innerText = "";
            }
        }
    </script>
</div>
<?php include 'app/views/footer.php'; ?>