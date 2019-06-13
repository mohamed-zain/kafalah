<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="node_modules/vue/dist/vue.min.js"></script>
</head>
<body>
<div id="root">
    <h2>my age is : {{age}}</h2>
    <button @click="add">add</button>
    <button @click="sub">add</button>
</div>



<script src="app.js">

</script>
</body>
<script>
    new Vue({
        el:"#root",
        data:{
            age:20,
        },
        methods:{
            add(){
                this.age++
            },
            sub(){
                this.age--
            }

        }
    });
</script>
</html>