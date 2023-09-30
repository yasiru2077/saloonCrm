<x-app-layout>
    <h1>By this you can get news Updates via Your Email And You can get up to 50% discounts</h1>
    <form action="/subcribe" method="post">
        @csrf
       
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
</x-app-layout>