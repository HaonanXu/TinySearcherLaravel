{!! Form::open(['url' => route('register.store')]) !!}

<div class="form-group">
    <div class="input-group xs-mb-15"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
        <input tpye="email" placeholder="Email Address" name="email" class="form-control" value="{{ old('email') }}">
    </div>
    <input tpye="text" placeholder="User Name" name="name" class="form-control" value="{{ old('name') }}">
    <input tpye="password" placeholder="Password" name="password" class="form-control" value="{{ old('password') }}">
</div>
{!! Form::close() !!}
