<?php

use App\Core\System;
use App\Core\Tools;
use App\Model\Arrays;
use App\Model\Form;

require_once 'top.php' ?>
<div class="container" id="hero">
    <div class="row justify-content-center pt-5">
        <div class="col-10 col-md-6 pt-3">
            <div class="card">
                <div class="card-body">
                    <div class="serachUser">
                        <input class="searchInput" placeholder="موبایل یا کد رزرو ..." name="searchInput">
                        <div class="searchButton">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="25px" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 485.6 485.6" style="enable-background:new 0 0 485.6 485.6;" xml:space="preserve"><g><g><path style="fill:#E64C3D;" d="M447.5,477.85l30.3-30.3c4-4,4-10.4,0-14.4l-149.2-149.2l-44.7,44.7l149.2,149.2    C437.1,481.85,443.5,481.85,447.5,477.85z"/><path style="fill:#2C2F33;" d="M163.4,67.05c-53.2,0-96.5,43.3-96.5,96.5c0,5,4.1,9.1,9.1,9.1s9.1-4.1,9.1-9.1    c0-43.2,35.1-78.3,78.3-78.3c5,0,9.1-4.1,9.1-9.1C172.5,71.05,168.4,67.05,163.4,67.05z"/><path style="fill:#2C2F33;" d="M335,277.55c-3.5-3.5-9.3-3.5-12.8,0l-15.9,15.9l-21.1-21.1c25.9-28.9,41.7-67.1,41.7-108.9    c0-90.1-73.3-163.4-163.4-163.4S0,73.35,0,163.45s73.3,163.4,163.4,163.4c41.8,0,79.9-15.8,108.9-41.7l21.1,21.1l-15.9,15.9    c-1.7,1.7-2.7,4-2.7,6.4s1,4.7,2.7,6.4l141.9,141.9c5.6,5.6,13,8.7,20.9,8.7s15.3-3.1,20.9-8.7l15.7-15.7c5.6-5.6,8.7-13,8.7-20.9    s-3.1-15.3-8.7-20.9L335,277.55z M18.2,163.45c0-80.1,65.2-145.3,145.3-145.3s145.3,65.2,145.3,145.3s-65.2,145.3-145.3,145.3    S18.2,243.55,18.2,163.45z M464.1,448.45l-15.7,15.7c-2.2,2.2-5,3.4-8.1,3.4s-5.9-1.2-8.1-3.4l-135.5-135.5l31.9-31.9l135.5,135.5    c2.2,2.2,3.4,5,3.4,8.1S466.2,446.35,464.1,448.45z"/></g></g></svg>
                        </div>
                    </div>
                    <div class="showUser row"></div>
                    <div class="userVerify">تایید ورود</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php' ?>