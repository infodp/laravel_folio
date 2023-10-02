<style>
    .card{
        width: 50%;
        display: flex;
        flex-direction: column;
        border: 3px #7c9fb0 solid;
        box-shadow: 2px 10px 10px 1px #7c9fb0;
    }
    .header{
        height: 30%;
        background-color: #7c9fb0;
        text-align: center;
    }
    .container {
        padding: 2px 16px;
    }
</style>
<div class="card">
    <div class="header"> {{$product->id}}</div>
    <div class="container">
         {{$product->description}}<br>        
         {{$product->stock}}
    </div>
</div>
