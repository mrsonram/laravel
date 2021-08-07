<div>
    <strong>Name : </strong>
    <input type="text"
        name="name"
        value="{{ isset($animals->name) ? $animals->name : '' }}"
        placeholder="name here..."/>
</div>
<div>
    <strong>type : </strong>
    <input type="text"
        name="type"
        value="{{ isset($animals->type) ? $animals->type : '' }}"
        placeholder="gender here..."/>
</div>
<div>
    <strong>gender : </strong>
    <input type="text"
        name="gender"
        value="{{ isset($animals->gender) ? $animals->gender : '' }}"
        placeholder="age here..."/>
</div>


