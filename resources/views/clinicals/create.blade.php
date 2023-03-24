@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">

            <form action="{{ route('clinicals.store') }}" method="POST">
                {{csrf_field()}}

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control @if($errors->has('name')) validation_border @endif" placeholder="名前" name="name">
                        
                    @if ($errors->has('name'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('name') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>年齢</label>
                    <div class="d-flex">
                        <input type="number" class="form-control @if($errors->has('age')) validation_border @endif input_age" placeholder="29" name="age">
                        <span class="d-block p-3">歳</span>
                    </div>
                    
                    @if ($errors->has('age'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('age') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>性別</label>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="radio2a" value="男">
                        <label class="form-check-label" for="radio2a">男</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="radio2b" value="女">
                        <label class="form-check-label" for="radio2b">女</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex" id="radio2b" value="その他">
                        <label class="form-check-label" for="radio2b">その他</label>
                    </div>

                    @if ($errors->has('sex'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('sex') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>電話番号</label>
                    <input type="tel"
                        class="form-control @if($errors->has('tel_num')) validation_border @endif input_tel"
                        placeholder="090-1111-2222" name="tel_num">

                    @if ($errors->has('tel_num'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('tel_num') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>メール</label>
                    <input type="email" class="form-control @if($errors->has('email')) validation_border @endif"
                        placeholder="test@gmail.com" name="email">

                    @if ($errors->has('email'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('email') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>郵便番号</label>
                    <input type="text"
                        class="form-control @if($errors->has('postal_num')) validation_border @endif input_tel"
                        placeholder="733-0003" name="postal_num" size="10" maxlength="8"
                        onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">

                    @if ($errors->has('postal_num'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('postal_num') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>住所</label>
                    <input type="text" class="form-control @if($errors->has('address')) validation_border @endif"
                        placeholder="広島県呉市" name="address">

                    @if ($errors->has('address'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('address') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>駐車場</label>
                </div>

                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking_lot" id="radio2a" value="有">
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="parking_lot" id="radio2b" value="無">
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>

                    @if ($errors->has('parking_lot'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('parking_lot') }}</li>
                    </ul>
                    @endif

                </div>

                <div class="form-group">
                    <label>ニーズ</label>
                    <textarea class="form-control @if($errors->has('needs')) validation_border @endif"
                        placeholder="content" rows="5" name="needs"></textarea>
                    @if ($errors->has('needs'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('needs') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴①</label>
                    <input type="text"
                        class="form-control @if($errors->has('medical_history_f')) validation_border @endif"
                        placeholder="CVA" name="medical_history_f">
                    @if ($errors->has('medical_history_f'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('medical_history_f') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴②</label>
                    <input type="text"
                        class="form-control @if($errors->has('medical_history_s')) validation_border @endif"
                        placeholder="MSA" name="medical_history_s">
                    @if ($errors->has('medical_history_s'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('medical_history_s') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴③</label>
                    <input type="text"
                        class="form-control @if($errors->has('medical_history_t')) validation_border @endif"
                        placeholder="その他" name="medical_history_t">
                    @if ($errors->has('medical_history_t'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('medical_history_t') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>ROM</label>
                    <input type="text" class="form-control @if($errors->has('needs')) validation_border @endif"
                        placeholder="肩関節外転" name="rom">
                    @if ($errors->has('rom'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('rom') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>仕事</label>
                    <input type="text" class="form-control @if($errors->has('work')) validation_border @endif"
                        placeholder="プログラマ" name="work">
                    @if ($errors->has('work'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('work') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="form-group px-2">
                    <label>ADL</label>

                    <div class="form-group">
                        <label>基本動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_basic" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_basic" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>
                        @if ($errors->has('adl_basic'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_basic') }}</li>
                        </ul>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>食事動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_eating" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_eating" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>

                        @if ($errors->has('adl_eating'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_eating') }}</li>
                        </ul>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>整容動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_grooming" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_grooming" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>

                        @if ($errors->has('adl_grooming'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_grooming') }}</li>
                        </ul>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>トイレ動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_toilet" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_toilet" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>

                        @if ($errors->has('adl_toilet'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_toilet') }}</li>
                        </ul>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>衣服動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_clothes" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_clothes" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>

                        @if ($errors->has('adl_clothes'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_clothes') }}</li>
                        </ul>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>入浴動作</label>
                    </div>

                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_bathing" id="radio2a" value="有">
                            <label class="form-check-label" for="radio2a">有</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="adl_bathing" id="radio2b" value="無">
                            <label class="form-check-label" for="radio2b">無</label>
                        </div>

                        @if ($errors->has('adl_bathing'))
                        <ul class="validation_message text-danger">
                            <li>{{ $errors->first('adl_bathing') }}</li>
                        </ul>
                        @endif
                    </div>

                </div>


                <div class="form-group">
                    <label>その他</label>
                    <textarea class="form-control @if($errors->has('others')) validation_border @endif"
                        placeholder="content" rows="5" name="others"></textarea>

                    @if ($errors->has('others'))
                    <ul class="validation_message text-danger">
                        <li>{{ $errors->first('others') }}</li>
                    </ul>
                    @endif
                </div>

                <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                    <button class="btn btn_primary submit_type" type="submit">保存</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection