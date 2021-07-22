<template>
<div > 
    <div class="bg-yellow-600 p-2 text-center mt-16 mb-16 text-white">
        <span >Home /</span>
        <span > Accesorios /</span>
        <span > Café extremo</span>
    </div>
</div>
<div class="container mx-auto px-40">
<div class="flex justify-around pb-4">
<table class="shadow-lg bg-white w-full">
  <tr>
    <th class="bg-yellow-700 font-body 	 border text-left px-8 py-4 text-white">Producto</th>
    <th class="bg-yellow-700 font-body	 border text-left px-8 py-4 text text-center text-white">Nombre</th>
    <th class="bg-yellow-700 font-body	 border text-left px-8 py-4 text-center text-white">Cantidad</th>
    <th class="bg-yellow-700 font-body	 border text-left px-8 py-4 text-center text-white">Precio unidad</th>
  </tr>
  <tr class="hover:bg-gray-300 duration-300 ease-in-out" >
    <td class="border px-8 py-4 w-16"><img src="../assets/CafeExtremo.png" alt="cafe"></td>
    <td class="border px-8 py-4 font-bold italic text-yellow-900">Café extremo</td>
    <td class="border px-8 py-4"> <div class=" w-24 h-8 bg-gray-100 flex justify-around  items-center mx-auto ">
           <span class="cursor-pointer">+</span>
           <span>2</span>
           <span class="cursor-pointer">-</span>  
       </div></td>
    <td class="border px-8 py-4">$50</td>
  </tr>
</table>
 
</div>
</div>

<div class="container mx-auto px-40 mt-5">
<input type="text" class="form-input  mt-16" placeholder="Cupón de descuento">
<button class="bg-yellow-800 hover:bg-yellow-600 text-white font-bold py-2.5 px-5  rounded duration-300 ease-in-out ">
  Canjear
</button>
<table class="table-fixed flex justify-end m-10 ">
  <thead>
    <tr>

    </tr>
  </thead>
  <tbody class="p-4 bg-yellow-50 rounded-xl">
    <tr>
      <td class="font-bold">Subtotal</td>
      <td class="pl-36">$998</td>
    </tr>
    <tr>
      <td class="font-bold">Envío</td>
      <td class="pl-36" >$20</td>
    </tr>
        <tr>
      <td class="font-bold" >Cupón</td>
      <td class="pl-36">No</td>
    </tr>
      <tr>
      <td class="pt-12 text-3xl font-bold ">Total</td>
      <td class="pl-36 pt-12 text-3xl font-bold">$118</td>
      
    </tr>
      <router-link to="/checkout" ><button class="bg-yellow-800 hover:bg-yellow-600 text-white font-bold py-2.5 px-5 rounded w-full mt-8 duration-300 ease-in-out">
  Comprar
</button></router-link>
  </tbody>

</table>

</div>

</template>

<script>
export default {
name:'Car'
}
</script>

<style>
body{
  background: #F2DBD2;
}
.x{
    width: 1.1rem;
    height: 0.5;
    background: red;
    border-radius: 100px;
    height: 1.1rem;
    transform: translateY(13px);
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translateX(-51px);
}
</style>
