<div class="form-row">

        <!----nombre-->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="name">Nombre</label>
                <div class="input-group" >
                    <span class="input-group-append" data-html="true" data-toggle="popover" data-placement="left" title="Restricciones" data-content="-M&aacute;ximo 50 caracteres <br> -M&iacute;nimo 3 caracteres <br> -No acepta caracteres especiales">
                        <button class="btn btn-dark" type="button">N</button>
                    </span>
                    <input
                            class="form-control text-capitalize {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            name="name"
                            placeholder="Ingrese Nombre" type="text"  value="{{ old('name', isset($user) ? $user->name : '') }}">
                </div>

                <div class="invalid-feedback {{ $errors->has('name')? 'd-block' : '' }}">
                    {{ $errors->has('name')? $errors->first('name') : 'El campo de Nombre es requerido'  }}
                </div>
            </div>

        <!------apellido--->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="lastname">Apellido</label>
                <div class="input-group" >
                    <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacuteximo 50 caracteres <br> -No acepta caracteres especiales <br>-No acepta n&uacute;meros">
                        <button class="btn btn-dark" type="button">A</button>
                    </span>
                    <input
                            class="form-control text-capitalize {{ $errors->has('lastname') ? 'is-invalid' : '' }}"
                            name="lastname"
                            placeholder="Ingrese apellido " type="text" value="{{ old('lastname', isset($user) ? $user->lastname : '') }}">
                </div>

                <div class="invalid-feedback {{ $errors->has('lastname')? 'd-block' : '' }}">
                    {{ $errors->has('lastname')? $errors->first('lastname') : 'El campo de Apellido es requerido'  }}
                </div>
            </div>
        <!----E-mail--->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="email">Email</label>
                <div class="input-group" >
                    <span class="input-group-append" data-html="true" data-placement="left" data-toggle="popover" title="Restricciones" data-content="Sigue el ejemplo">
                        <button class="btn btn-dark" type="button">@</button>
                    </span>
                    <input
                            class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                            name="email"
                            placeholder="Ingrese Email: Ej example@gmail.com" type="text"  value="{{ old('email', isset($user) ? $user->email : '') }}">
                </div>

                <div class="invalid-feedback {{ $errors->has('email')? 'd-block' : '' }}">
                    {{ $errors->has('email')? $errors->first('email') : 'El campo Email es requerido'  }}
                </div>
            </div>
            {{-- UNIDAD --}}
      
                <div class="col-md-6 mb-3">
                    <label class="col-form-label" for="email">Unidad</label>
                    <div class="input-group" >
                        <span class="input-group-append" data-html="true" data-placement="left" data-toggle="popover" title="Restricciones" data-content="Sigue el ejemplo">
                            <button class="btn btn-dark" type="button">U</button>
                        </span>
                            <select class="form-control js-example-basic-single" name="unidad" single="single" required>
                                @foreach($unidades as $item)
                                    <option value="{{ $item->id }}" {{ (isset($user) && $user->unit_id == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
      

        <!----nombre de usuario----->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="username">Nombre de Usuario</label>
                <div class="input-group">
                    <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content="-M&aacute;ximo 20 caracteres <br>-Solo se permite alfanum&eacute;rico <br>-No acepta espacios <br>-Se permite may&uacute;sculas">
                        <button class="btn btn-dark" type="button">NU</button>
                    </span>
                    <input
                            class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                            name="username"
                            placeholder="Ingrese Nombre de usuario " type="text" value="{{ old('username', isset($user) ? $user->username : '') }}">
                </div>

                <div class="invalid-feedback {{ $errors->has('username')? 'd-block' : '' }}">
                    {{ $errors->has('username')? $errors->first('username') : 'El campo de Nombre de usuario es requerido'  }}
                </div>
            </div>
            
        
        <!-----contraseña--->
            {{-- @if(!isset($user)) --}}
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="password">Contraseña</label>
                <div class="input-group" >
                    <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-placement="left" data-content="-M&aacute;ximo 25 caracteres <br>-M&iacute;nimo 8 caracteres <br>-No permite caracteres especiales <br>-Debe ingresar al menos una letra y un n&uacute;mero<br>-No permite espacios">
                        <button class="btn btn-dark" type="button">P</button>
                    </span>

                    <input
                            class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                            name="password"
                            id="password"
                            placeholder="Ingrese una contraseña" type="password" value="">
                    
                            {{-- <div class="input-group-append">
                                <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div> --}}
                </div>

                <div class="invalid-feedback {{ $errors->has('password')? 'd-block' : '' }}">
                    {{ $errors->has('password')? $errors->first('password') : 'El campo de Password es requerido'  }}
                </div>
            </div>
        <!----contraseña confirmada--->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="confirm_password">Confirmar Contraseña</label>
                <div class="input-group">
                    <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-content="Confirme la contraseña creada anteriormente">
                        <button class="btn btn-dark" type="button">CP</button>
                    </span>

                    <input
                            class="form-control {{ $errors->has('password_confirm') ? 'is-invalid' : '' }}"
                            name="password_confirm"
                            id="confirm_password"
                            placeholder="Confirme su contraseña" type="password" value="">

                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-dark" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                </div>

                <div class="invalid-feedback {{ $errors->has('password_confirm')? 'd-block' : '' }}">
                    {{ $errors->has('password_confirm')? $errors->first('password_confirm') : 'Este campo es requerido'  }}
                </div>
            </div>
        <!----roles-->
            <div class="col-md-6 mb-3">
                <label class="col-form-label" for="roles">Roles</label>
                <div class="input-group" >
                                                        <span class="input-group-append" data-html="true" data-toggle="popover" title="Restricciones" data-placement="left" data-content="Seleccione un rol">
                                                            <button class="btn btn-dark" type="button">R</button>
                                                        </span>
                    <select class="form-control js-example-basic-single {{ $errors->has('roles') ? 'is-invalid' : '' }}" name="roles" single="single">
                        @foreach($roles as $item)
                            <option value="{{ $item->name }}" {{ (isset($user) && $user->roles->contains('name', $item->name)) ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="invalid-feedback {{ $errors->has('roles')? 'd-block' : '' }}">
                    {{ $errors->has('roles')? $errors->first('roles') : 'Este campo es requerido'  }}
                </div>
            </div>

</div>