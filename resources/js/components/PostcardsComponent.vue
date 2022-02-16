<template>
    <section id="postcards">
        <h1>Postcards:</h1>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Sender</th>
                <th>Address</th>
                <th>Text</th>
                <th>Image</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{ postcard.id }}</td>
                <td>{{ postcard.sender }}</td>
                <td>{{ postcard.address }}</td>
                <td>{{ postcard.text }}</td>
                <td>
                    <img v-if="postcard.image" :src="`/storage/asset/` + postcard.image" width="100px">
                    <p v-else>no image</p>
                </td>
            </tr>
        </table>
    </section>
</template>

<script>
export default {
    data: function() {
        return {
            postcards: []
        };
    },

    mounted() {
        axios.get('/api/postcards/list')
        .then(r => this.postcards = r.data)
        .catch(e => console.error(e));
    }
}
</script>