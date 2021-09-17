<template>
  <div>
<Car/>

  </div>
</template>

<script>
import Car from '../components/Car.vue'
export default {
data() {
    return {
        
    }
    
},
components:{
    Car
}
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