<x-admin-navbar />

<?php
$res=$result->result;
?>



<form action="/publishResult" method="post">
    @csrf

    <div class="contaier p-3">
        <div class="row ">
            <div class="col col-xl-2">
                <h4>Publish Result</h4>
            </div>
            <div class="col col-xl-1">
                <label class="switch">

                    <input type="checkbox" value={{$res}} @if($res==1) checked @endif name="result" onchange="this.form.submit()">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</form>


