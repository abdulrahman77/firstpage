<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 16px;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .btn {
            background-color: rgb(0, 0, 0, 0.7);
            border: 1px solid #fff;
            color: #fff;
            padding: 10px 5px;
            transition: background-color .5s;
            font-weight: bold;
            font-size: 1em;
        }

        .btn:hover {
            background-color: rgb(0, 0, 0, 0.4);
        }

        .border {
            border: 1px solid #000;
            padding: 3px;
        }

        .background {
            background-color: rgb(0, 0, 0, 0.1);
        }

        .list-enter-active,
        .list-leave-active {
            transition: all 0.5s ease;
        }

        .list-enter-from,
        .list-leave-to {
            opacity: 0;
            transform: translateX(30px);
        }
    </style>
</head>

<body>
    <div id="page">
        <div :class="pclass">
            <div v-if="cart.length>0">count({{cart.length}})</div>
            <div>f-{{address}}</div>
            <div v-html="address"></div>
            <div v-once>{{address}}</div>
            <div>{{slugit+now}}</div>
        </div>
        <div>
            <textarea v-model="address" cols="15" rows="10"></textarea>
        </div>
        <div>
            <label for="ID">ID:</label>
            <input type="text" v-model="maximum" />
            <input type="range" name="maximum" v-model="maximum" min=0 max=10>
        </div>
        <transition-group name="list" tag="div">
            <div v-for="(prod, index) in products" :key="prod.id" v-if="prod.id>=maximum">
                <div>ID : {{prod.id}}</div>
                <div>Name : {{prod.name}}</div>
                <div>Email : {{prod.email}}</div>
                <div>{{ prod.id | currency }}</div>
                <button class="btn" @click="addItem(prod)">+ADD</button>
            </div>
        </transition-group>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: "#page",
            data: {
                minimum: 1,
                maximum: 10,
                products: null,
                cart: [],
                address: 'frazertown',
                pclass: ['border', 'background']
            },
            methods: {
                addItem: function(item) {
                    this.cart.push(item);
                },
                fetchItem: function() {
                    fetch('https://jsonplaceholder.typicode.com/comments?postId=1')
                        .then(response => response.json())
                        .then(data => {
                            this.products = data
                        });
                }
            },
            mounted: function() {
                this.fetchItem();
            },
            computed: {
                now: function() {
                    date = new Date();
                    return (`${date.getHours()}-${date.getMinutes()}-${date.getSeconds()}`);
                },
                slugit: function() {
                    return this.address
                        .toLowerCase()
                        .replace(/[^\w ]+/g, '')
                        .replace(/ +/g, '-')
                }
            },
            filters: {
                currency: function(value) {
                    return '$' + Number.parseFloat(value).toFixed(2);
                }
            }
        });
    </script>
</body>

</html>