<template>
    <div>

        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    Sender
                </th>
                <th>
                    Address
                </th>
                <th>
                    Text
                </th>
                <th>
                    Image
                </th>
            </tr>
            <tr v-for="postcard in postcards" :key='postcard.id'>
                <td>{{ postcard.id }}</td>
                <td>{{ postcard.sender }}</td>
                <td>{{ postcard.address }}</td>
                <td>{{ postcard.text }}</td>
                <td><img v-if="postcard.image" :src="'/storage/postcards/' + postcard.image"></td>
            </tr>
        </table>
        
    </div>
</template>

<script>
    export default {
        data() {

            return {

                postcards:[]
            };
        },
        mounted() {
            
            axios.get('/api/postcards/list')
                 .then(r => this.postcards = r.data)
                 .catch(e => console.error(e));
        }
    }
</script>
