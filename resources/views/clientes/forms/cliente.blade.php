
	
 		<div class="form-group"  style="width: 500px">
			{!! Form::label('Nombre: ') !!}

			{!! Form::text('nombre', null,['class' => 'form-control','placeholder'=> 'Ingresa nombre del cliente',"required"])  !!}


		</div>

	    <div class="form-group"  style="width: 300px">
			{!! Form::label('Dni: ') !!}

			{!! Form::text('dni',null,['class' => 'form-control','placeholder'=> 'Ingresa dni del cliente',"required"]) !!}

			

		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Provincia: ') !!}

			{!! Form::text('Provincia',null,['class' => 'form-control','placeholder'=> 'Ingresa la provincia del cliente',"required"]) !!}

		
		</div>

		<div class="form-group"  style="width: 500px">
			{!! Form::label('Ciudad: ') !!}

			{!! Form::text('ciudad',null,['class' => 'form-control','placeholder'=> 'Ingresa la ciudad del cliente',"required"]) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Direccion: ') !!}
			{!! Form::text('direccion',null,['class' => 'form-control','placeholder'=> 'Ingresa la direccion del cliente',"required"]) !!}
		</div>
		<div class="form-group"  style="width: 500px">
			{!! Form::label('Email: ') !!}
			{!! Form::email('email',null,['class' => 'form-control','placeholder'=> 'Ingresa la email del cliente','required']) !!}
		</div>
	


		


<script type="text/javascript">  

function validar(id) {
	var input = document.getElementById(id).value;
	var t = input.split('');
	
	if (input == ' ' || t[0] == ' ' || input == null) {
	//	alert('Debe ingresar un dato ');
		document.getElementById(id).value="";
      

		document.getElementById(id).focus();
	}
	if(document.getElementById(id).value == null) {
		
		document.frm.nombre.focus();
		
	}
}


/*function validar (id)
{
	var str = document.getElementById(id).value;

document.getElementById(id).value=str.replace(/^\s*|\s*$/g,"");
document.getElementById(id).focus();

}
*/

</script>

