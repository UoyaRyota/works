@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="{{ route('clinicals.update', $clinical->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}

                <div class="form-group">
                    <label>名前</label>
                    <input type="text" class="form-control" placeholder="名前" name="name" value="{{ $clinical->name }}">
                </div>

                <div class="form-group">
                    <label>年齢</label>
                    <input type="number" class="form-control" placeholder="29" name="age" value="{{ $clinical->age }}">歳
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
                    <input type="tel" class="form-control" placeholder="090-1111-2222" name="tel_num" value="{{ $clinical->tel_num }}">
                </div>

                <div class="form-group">
                    <label>メール</label>
                    <input type="email" class="form-control" placeholder="test@gmail.com" name="email" value="{{ $clinical->email }}">
                </div>

                <div class="form-group">
                    <label>郵便番号</label>
                    <input type="text" class="form-control" placeholder="733-0003" name="postal_num" value="{{ $clinical->postal_num }}">
                </div>

                <div class="form-group">
                    <label>住所</label>
                    <input type="text" class="form-control" placeholder="広島県呉市" name="address"value="{{ $clinical->address }}">
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
                    <textarea class="form-control" placeholder="content" rows="5" name="needs">{{ $clinical->needs }}</textarea>
                </div>

                <div class="form-group">
                    <label>既往歴①</label>
                    <input type="text" class="form-control" placeholder="CVA" name="medical_history_f" value="{{ $clinical->medical_history_f }}">
                </div>

                <div class="form-group">
                    <label>既往歴②</label>
                    <input type="text" class="form-control" placeholder="MSA" name="medical_history_s" value="{{ $clinical->medical_history_s }}">
                </div>

                <div class="form-group">
                    <label>既往歴③</label>
                    <input type="text" class="form-control" placeholder="その他" name="medical_history_t" value="{{ $clinical->medical_history_t }}">
                </div>

                <div class="form-group">
                    <label>ROM</label>
                    <input type="text" class="form-control" placeholder="肩関節外転" name="rom" value="{{ $clinical->rom }}">
                </div>

                <div class="form-group">
                    <label>仕事</label>
                    <input type="text" class="form-control" placeholder="プログラマ" name="work" value="{{ $clinical->work }}">
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
                    <label>その他</label>
                    <textarea class="form-control" placeholder="content" rows="5" name="others" >{{ $clinical->others }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
@endsection