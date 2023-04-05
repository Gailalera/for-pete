@include('partials.header')

<br>
<br>
<br>
<h5>Create new Input</h5>
<form action="/saveProduct" method="POST">
    @csrf
    
 
<div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="description">
    
    </div>


    <div class="mb-3">
      <label for="quantity" class="form-label">Quantity</label>
      <input 
      type="text" 
      class="form-control" 
      aria-describedby="emailHelp"
      name="quantity">
   
    </div>



    <div class="mb-3">
      <label for="price" class="form-label">Price</label>
      <input 
      type="text" 
      class="form-control" 
      id="exampleInputEmail1" 
      aria-describedby="emailHelp"
      name="price">
   
    </div>


    

    <button type="submit" class="btn btn-success">Add</button>
  </form>