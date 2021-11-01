{!! input('text', 'first_name', trans('admin.customer.columns.first_name'), 'required') !!}

{!! input('text', 'last_name', trans('admin.customer.columns.last_name'), 'required') !!}

{!! input('text', 'email', trans('admin.customer.columns.email'), 'email') !!}

{!! input('text', 'phone', trans('admin.customer.columns.phone'), 'required') !!}

{!! input('password', 'password', trans('admin.customer.columns.password'), 'min:7') !!}
{!! input('password', 'password_confirmation', trans('admin.customer.columns.password_repeat'), 'confirmed:password|min:7') !!}

{!! input('checkbox', 'activated', trans('admin.customer.columns.activated'), '') !!}

{!! input('checkbox', 'forbidden', trans('admin.customer.columns.forbidden'), '') !!}


