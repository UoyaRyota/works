<?php $user = Auth::user();?>
<div class="user_test">
    <div class="user_login_icon user_icon_img">
        <a href="{{ route('users.show',$user->id) }}">
            @if($user->image_path == '')
            <img class="user_icon_img_pic" src="{{ asset('no-image.png') }}" alt="">
            @else
            <img class="user_icon_img_pic" src="{{ $user->image_path }}" alt="">
            @endif

        </a>
    </div>
</div>