@extends('app')

@section('css')
    <style>
.rounded-circle {
  width: 300px;
  height: 300px;
  border-radius: 50%;
}
    </style>

@endsection
@section('content')

<div class="content col-9">
    <div class="row mt-5">
        <div class="col-sm-4 mx-auto text-center" >
          <img class="rounded-circle"  src="{{asset('images/fritzie(1).png')}}" alt="" width="300px">
        </div>
        <div class="col-sm-8 mx-auto text-left">
            <form style="padding-right: 25px">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Example select</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect2">Example multiple select</label>
                  <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
              </form>
        </div>
      </div>
</div>


    
@endsection

