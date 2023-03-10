@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                <div class="form-group">
                    <label>名前:{{ $clinical->name }}</label>
                </div>

                <div class="form-group">
                    <label>年齢:{{ $clinical->age }}歳</label>
                </div>

                <div class="form-group">
                    <label>性別:{{ $clinical->sex }}</label>
                </div>
                <div class="form-group">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="radio2a" value="男"
                    @if (old('sex', $clinical->sex) == '男') checked @endif>
                    <label class="form-check-label" for="radio2a" 
                    >男</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" id="radio2b" value="女"
                    @if (old('sex', $clinical->sex) == '女') checked @endif>
                    <label class="form-check-label" for="radio2b">女</label>
                  </div>
                </div>

                <div class="form-group">
                    <label>電話番号:{{ $clinical->tel }}</label>
                </div>

                <div class="form-group">
                    <label>メール:{{ $clinical->email }}</label>
                </div>

                <div class="form-group">
                    <label>郵便番号:{{ $clinical->postal_num }}</label>
                </div>

                <div class="form-group">
                    <label>住所:{{ $clinical->address }}</label>
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
                    <label>ニーズ:{{ $clinical->needs }}</label>
                </div>

                <div class="form-group">
                    <label>既往歴①:{{ $clinical->medical_history_f }}</label>
                </div>

                <div class="form-group">
                    <label>既往歴②:{{ $clinical->medical_history_s }}</label>
                </div>

                <div class="form-group">
                    <label>既往歴③:{{ $clinical->medical_history_t }}</label>
                </div>

                <div class="form-group">
                    <label>ROM:{{ $clinical->rom }}</label>
                </div>

                <div class="form-group">
                    <label>仕事:{{ $clinical->work }}</label>
                </div>

                <div class="form-group">
                    <label>ADL</label>
                </div>

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

                <div class="form-group">
                    <label>その他:{{ $clinical->others }}</label>
                </div>

                <div class="form-group">
                  <a href="{{ route('clinicals.edit', $clinical->id) }}" class="btn btn-primary">edit</a>
                </div>


        </div>
    </div>
</div>
@endsection