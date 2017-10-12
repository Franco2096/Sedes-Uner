<div id="contacts">
  <table>
    <thead>
      <tr>
        <th class="sort" data-sort="name">Name</th>
        <th class="sort" data-sort="age">Age</th>
        <th class="sort" data-sort="city">City</th>
        <th colspan="2">
          <input type="text" class="search" placeholder="Search contact" />
        </th>
      </tr>
    </thead>
    <tbody class="list">
      <tr>
        <td class="id" style="display:none;">1</td>
        <td class="name">Jonny</td>
        <td class="age">27</td>
        <td class="city">Stockholm</td>
        <td class="edit"><button class="edit-item-btn">Edit</button></td>
        <td class="remove"><button class="remove-item-btn">Remove</button></td>
      </tr>
      <tr>
        <td class="id" style="display:none;">2</td>
        <td class="name">Jonas</td>
        <td class="age">-132</td>
        <td class="city">Berlin</td>
        <td class="edit"><button class="edit-item-btn">Edit</button></td>
        <td class="remove"><button class="remove-item-btn">Remove</button></td>
      </tr>
      <tr>
        <td class="id" style="display:none;">3</td>
        <td class="name">Gustaf</td>
        <td class="age">-23</td>
        <td class="city">Sundsvall</td>
        <td class="edit"><button class="edit-item-btn">Edit</button></td>
        <td class="remove"><button class="remove-item-btn">Remove</button></td>
      </tr>
      <tr>
        <td class="id" style="display:none;">4</td>
        <td class="name">Fredrik</td>
        <td class="age">26</td>
        <td class="city">Goteborg</td>
        <td class="edit"><button class="edit-item-btn">Edit</button></td>
        <td class="remove"><button class="remove-item-btn">Remove</button></td>
      </tr>
    </tbody>
  </table>
  <table>
    <td class="name">
      <input type="hidden" id="id-field" />
      <input type="text" id="name-field" placeholder="Name" />
    </td>
    <td class="age">
      <input type="text" id="age-field" placeholder="Age" />
    </td>
    <td class="city">
      <input type="text" id="city-field" placeholder="City" />
    </td>
    <td class="add">
      <button id="add-btn">Add</button>
      <button id="edit-btn">Edit</button>
    </td>
  </table>

  <p>This is just a simple example showing how to use <code>add()</code>, <code>values()</code> and <code>remove()</code>. The example have bugs (not List.js (I hope ;)) so I do not recommend copy-paste programming.</p>
</div>


<script type="text/javascript">
var options = {
  valueNames: [ 'id', 'name', 'age', 'city' ]
};

// Init list
var contactList = new List('contacts', options);

var idField = $('#id-field'),
	nameField = $('#name-field'),
	ageField = $('#age-field'),
	cityField = $('#city-field'),
	addBtn = $('#add-btn'),
	editBtn = $('#edit-btn').hide(),
	removeBtns = $('.remove-item-btn'),
	editBtns = $('.edit-item-btn');

// Sets callbacks to the buttons in the list
refreshCallbacks();

addBtn.click(function() {
  contactList.add({
	id: Math.floor(Math.random()*110000),
	name: nameField.val(),
	age: ageField.val(),
	city: cityField.val()
  });
  clearFields();
  refreshCallbacks();
});

editBtn.click(function() {
  var item = contactList.get('id', idField.val())[0];
  item.values({
	id:idField.val(),
	name: nameField.val(),
	age: ageField.val(),
	city: cityField.val()
  });
  clearFields();
  editBtn.hide();
  addBtn.show();
});

function refreshCallbacks() {
  // Needed to add new buttons to jQuery-extended object
  removeBtns = $(removeBtns.selector);
  editBtns = $(editBtns.selector);

  removeBtns.click(function() {
	var itemId = $(this).closest('tr').find('.id').text();
	contactList.remove('id', itemId);
  });

  editBtns.click(function() {
	var itemId = $(this).closest('tr').find('.id').text();
	var itemValues = contactList.get('id', itemId)[0].values();
	idField.val(itemValues.id);
	nameField.val(itemValues.name);
	ageField.val(itemValues.age);
	cityField.val(itemValues.city);

	editBtn.show();
	addBtn.hide();
  });
}

function clearFields() {
  nameField.val('');
  ageField.val('');
  cityField.val('');
}

</script>


























































{{--
		<div class="form-group">
			{!! Form::label('Estado: ') !!}
			{!! Form::select('estado', array('En_Espera' => 'En espera', 'Aprobado_por_Cliente' => 'Aprobado por el cliente' ,'Rechazado' => 'Rechazado'),null,['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('Fecha de presupuesto: ') !!}
			{!! Form::date('fecha_presupuesto', \Carbon\Carbon::now()) !!}
		</div>




		<div class="form-group">
			{!! Form::label('Solicitud asociada: ') !!}
			{!! Form::select('solicitud_id', $solicitud, ['class' => 'form-control m-bot15']) !!}
		</div> --}}









		{{-- <div class="form-group">
			{!! Form::label('Usuario asociado: ') !!}
			{!! Form::text('usuario_id',$usuario, ['class' => 'form-control ','readonly']) !!}
		</div> --}}
