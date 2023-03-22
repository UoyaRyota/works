@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 basic">

              <form action="{{ route('clinicals.update', $clinical->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control @if($errors->has('name')) validation_border @endif" placeholder="名前" name="name" value="{{ $clinical->name }}">
                    @if ($errors->has('name')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('name') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>年齢</label>
                    <div style="display: flex;">
                    <input type="number" class="form-control @if($errors->has('age')) validation_border @endif input_age" placeholder="29" name="age" value="{{ $clinical->age }}"> <span style="display: block; padding:15px;">歳</span> 
                    </div>

                    @if ($errors->has('age')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('age') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>性別</label>
                </div>
                <div class="form-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="radio2a" value="男" @if (old('sex', $clinical->sex) == '男') checked @endif>
                    <label class="form-check-label" for="radio2a">男</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="radio2b" value="女"
                    @if (old('sex', $clinical->sex) == '女') checked @endif>
                    <label class="form-check-label" for="radio2b">女</label>
                  </div>
                </div>

                <div class="form-group">
                    <label>電話番号</label>
                    <input type="tel" class="form-control @if($errors->has('tel_num')) validation_border @endif input_tel" placeholder="090-1111-2222" name="tel_num" value="{{ $clinical->tel_num }}">
                    @if ($errors->has('tel_num')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('tel_num') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>メール</label>
                    <input type="email" class="form-control @if($errors->has('email')) validation_border @endif" placeholder="test@gmail.com" name="email" value="{{ $clinical->email }}">
                    @if ($errors->has('email')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('email') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>郵便番号</label>
                    <input type="text" class="form-control @if($errors->has('postal_num')) validation_border @endif input_tel" placeholder="733-0003" name="postal_num" value="{{ $clinical->postal_num }}" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                    @if ($errors->has('postal_num')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('postal_num') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>住所</label>
                    <input type="text" class="form-control @if($errors->has('address')) validation_border @endif" placeholder="広島県呉市" name="address"value="{{ $clinical->address }}">
                    @if ($errors->has('address')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('address') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>駐車場</label>
                </div>

                <div class="form-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking_lot" id="radio2a" value="有" @if (old('parking_lot', $clinical->parking_lot) == '有') checked @endif>
                    <label class="form-check-label" for="radio2a">有</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking_lot" id="radio2b" value="無" @if (old('parking_lot', $clinical->parking_lot) == '無') checked @endif>
                    <label class="form-check-label" for="radio2b">無</label>
                  </div>
                </div>
                
                <div class="form-group">
                    <label>ニーズ</label>
                    <textarea class="form-control @if($errors->has('needs')) validation_border @endif" placeholder="content" rows="5" name="needs">{{ $clinical->needs }}</textarea>
                    @if ($errors->has('needs')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('needs') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴①</label>
                    <input type="text" class="form-control @if($errors->has('medical_history_f')) validation_border @endif" placeholder="CVA" name="medical_history_f" value="{{ $clinical->medical_history_f }}">
                    @if ($errors->has('medical_history_f')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('medical_history_f') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴②</label>
                    <input type="text" class="form-control @if($errors->has('medical_history_s')) validation_border @endif" placeholder="MSA" name="medical_history_s" value="{{ $clinical->medical_history_s }}">
                    @if ($errors->has('medical_history_s')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('medical_history_s') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>既往歴③</label>
                    <input type="text" class="form-control @if($errors->has('medical_history_t')) validation_border @endif" placeholder="その他" name="medical_history_t" value="{{ $clinical->medical_history_t }}">
                    @if ($errors->has('medical_history_t')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('medical_history_t') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>ROM</label>
                    <input type="text" class="form-control @if($errors->has('rom')) validation_border @endif" placeholder="肩関節外転" name="rom" value="{{ $clinical->rom }}">
                    @if ($errors->has('rom')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('rom') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="form-group">
                    <label>仕事</label>
                    <input type="text" class="form-control @if($errors->has('work')) validation_border @endif" placeholder="プログラマ" name="work" value="{{ $clinical->work }}">
                    @if ($errors->has('work')) 
                        <ul class="validation_message" style="color: red;">
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
                        <input class="form-check-input" type="radio" name="adl_basic" id="radio2a" value="有" @if (old('adl_basic', $clinical->adl_basic) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_basic" id="radio2b" value="無" @if (old('adl_basic', $clinical->adl_basic) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>食事動作</label>
                    </div>

                    <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_eating" id="radio2a" value="有" @if (old('adl_eating', $clinical->adl_eating) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_eating" id="radio2b" value="無" @if (old('adl_eating', $clinical->adl_eating) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>整容動作</label>
                    </div>

                    <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_grooming" id="radio2a" value="有" @if (old('adl_grooming', $clinical->adl_grooming) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_grooming" id="radio2b" value="無" @if (old('adl_grooming', $clinical->adl_grooming) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>トイレ動作</label>
                    </div>

                    <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_toilet" id="radio2a" value="有" @if (old('adl_toilet', $clinical->adl_toilet) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_toilet" id="radio2b" value="無" @if (old('adl_toilet', $clinical->adl_toilet) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>衣服動作</label>
                    </div>

                    <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_clothes" id="radio2a" value="有" @if (old('adl_clothes', $clinical->adl_clothes) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_clothes" id="radio2b" value="無" @if (old('adl_clothes', $clinical->adl_clothes) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                    <div class="form-group">
                        <label>入浴動作</label>
                    </div>

                    <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_bathing" id="radio2a" value="有" @if (old('adl_bathing', $clinical->adl_bathing) == '有') checked @endif>
                        <label class="form-check-label" for="radio2a">有</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="adl_bathing" id="radio2b" value="無" @if (old('adl_bathing', $clinical->adl_bathing) == '無') checked @endif>
                        <label class="form-check-label" for="radio2b">無</label>
                    </div>
                    </div>

                </div>



                <div class="form-group">
                    <label>その他</label>
                    <textarea class="form-control @if($errors->has('others')) validation_border @endif" placeholder="content" rows="5" name="others" >{{ $clinical->others }}</textarea>
                    @if ($errors->has('others')) 
                        <ul class="validation_message" style="color: red;">
                            <li>{{ $errors->first('others') }}</li>
                        </ul>
                    @endif
                </div>

                <div class="d-grid gap-2 col-8 mx-auto mt-4 ">
                        <button class="btn btn-primary submit-type" type="submit">更新</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection