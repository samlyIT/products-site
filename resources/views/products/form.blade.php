     <form action="{{ route('products.store') }}" method="POST">
         @csrf
         <div>
             <label for="title">Title</label>
             <input type="text" name="title" required>
         </div>
         <div>
             <label for="price">Price</label>
             <input type="number" name="price" required>
         </div>
         <div>
             <label for="qty">Quantity</label>
             <input type="number" name="qty" required>
         </div>
         <button type="submit">Add Product</button>
     </form>
     