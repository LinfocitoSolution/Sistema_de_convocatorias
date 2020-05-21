<div class="form-row">

    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="name">Nombre</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">N</button>
            </span>
            <input
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name"
                    placeholder="Ingrese Nombre" type="text"  value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
            {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="lastname">Apellido</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">A</button>
            </span>
            <input
                    class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                    name="lastname"
                    placeholder="Ingrese apellido " type="text" value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
            {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
        </div>
    </div>
  
    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="name">Email</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">@</button>
            </span>
            <input
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    name="name"
                    placeholder="Ingrese Email" type="text"  value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
            {{ $errors->has('name')? $errors->first('name') : 'El campo Email es requerido'  }}
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="lastname">Nombre de Usuario</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">NU</button>
            </span>
            <input
                    class="form-control {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                    name="lastname"
                    placeholder="Ingrese Nombre de usuario " type="text" value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
            {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Nombre de usuario es requerido'  }}
        </div>
    </div>
    
   

    {{-- @if(!isset($user)) --}}
    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="password">Password</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">P</button>
            </span>

            <input
                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    name="password"
                    placeholder="Ingrese una contrasenia" type="text" value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
            {{ $errors->has('password')? $errors->first('password') : 'El campo de Password es requerido'  }}
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label class="col-form-label" for="confirm_password">Confirm Password</label>
        <div class="input-group">
            <span class="input-group-append">
                <button class="btn btn-primary" type="button">CP</button>
            </span>

            <input
                    class="form-control {{ $errors->has('password_confirm') ? 'is-invalid' : '' }}"
                    name="password_confirm"
                    placeholder="Confirme su contrasenia" type="text" value="">
        </div>

        <div class="invalid-feedback {{ $errors->has('password_confirm')? 'd-block' : '' }}">
            {{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Este campo es requerido'  }}
        </div>
    </div>
    {{-- @endif --}}

    <div class="col-md-12 mb-3">
        <label class="col-form-label" for="roles">Roles</label>
        <div class="input-group">
                                                <span class="input-group-append">
                                                    <button class="btn btn-primary" type="button">R</button>
                                                </span>
            <select class="form-control js-example-basic-multiple {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles[]" multiple="multiple">
            
                    <option value="" >administrador </option>
                    <option value="" >jefe de Departamento </option>
                    <option value="" >Secretaria </option>
                    <option value="" >Comision de merito </option>
               
            </select>
        </div>

        <div class="invalid-feedback {{ $errors->has('roles')? 'd-block' : '' }}">
            {{ $errors->has('roles')? $errors->first('roles') : 'Este campo es requerido'  }}
        </div>
    </div>
</div>