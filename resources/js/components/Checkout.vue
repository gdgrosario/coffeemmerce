<template>

<div class="container mx-auto px-40">
<div class="container mx-auto px-40">
<div class="flex justify-around pb-4">
<table class="shadow-lg bg-white w-full mt-16">
  <tr>
    <th class="bg-yellow-700	 border text-left px-8 py-4 text-white">Producto</th>
    <th class="bg-yellow-700	 border text-left px-8 py-4 text text-center text-white">Nombre</th>
    <th class="bg-yellow-700	 border text-left px-8 py-4 text-center text-white">Precio Total</th>
  </tr>
  <tr class="hover:bg-gray-300 duration-300 ease-in-out">
    <td class="border px-8 py-4 w-16"><img src="../assets/CafeExtremo.png" alt="cafe"></td>
    <td class="border px-8 py-4 font-bold italic text-yellow-900">Café extremo</td>
    <td class="border px-8 py-4">$50</td>
  </tr>
</table>
 
</div>
</div>

<div class="mt-8">
    <h2 class="font-bold text-xl">Detalles de compra</h2>
    </div>
    <div>
     <input type="text" class="form-input  mt-6 w-96 border-transparent" placeholder="Nombre">
    <input type="text" class="form-input  mt-6 ml-8 w-96 border-transparent" placeholder="Apellido">
        <input type="text" class="form-input  mt-6  w-96 border-transparent" placeholder="Ciudad">
            <input type="text" class="form-input  mt-6 ml-8 w-96 border-transparent" placeholder="Dirección">
                <input type="text" class="form-input  mt-6  w-96 border-transparent" placeholder="Teléfono">
                <button class="bg-yellow-800 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded block mt-7 mb-8 w-52 duration-300 ease-in-out">
  Procesar pago
</button>

        </div>        
         </div>

</template>

<script>
export default {
    name: 'Cneckout'
}
</script>

<style>

</style>