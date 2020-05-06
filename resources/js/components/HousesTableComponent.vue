<template>
    <el-container>
        <el-aside width="400px">
            <el-form ref="form" class="aside-form" :model="form" label-width="120px" size="mini">
                <el-form-item label="Name">
                    <el-input v-model="form.name" placeholder="Tap to input"></el-input>
                </el-form-item>
                <el-form-item label="Price">
                    <el-slider
                        v-model="form.price"
                        range
                        :max="1000000">
                    </el-slider>
                </el-form-item>
                <el-form-item label="Bedrooms">
                    <el-input-number v-model="form.bedrooms" :min="0" :step="1"></el-input-number>
                </el-form-item>
                <el-form-item label="Bathrooms">
                    <el-input-number v-model="form.bathrooms" :min="0" :step="1"></el-input-number>
                </el-form-item>
                <el-form-item label="Storeys">
                    <el-input-number v-model="form.storeys" :min="0" :step="1"></el-input-number>
                </el-form-item>
                <el-form-item label="Garages">
                    <el-input-number v-model="form.garages" :min="0" :step="1"></el-input-number>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="fetchData">Search</el-button>
                    <el-button @click="clearSearch">Clear</el-button>
                </el-form-item>
            </el-form>
        </el-aside>
        <el-main>
            <el-table
                v-loading="loading"
                :data="houses"
                empty-text="No data"
                stripe
                style="width: 100%">
                <el-table-column
                    prop="name"
                    label="Name"
                    width="180">
                </el-table-column>
                <el-table-column
                    prop="price"
                    label="Price"
                    width="180"
                    sortable>
                </el-table-column>
                <el-table-column
                    prop="bedrooms"
                    label="Bedrooms"
                    sortable>
                </el-table-column>
                <el-table-column
                    prop="bathrooms"
                    label="Bathrooms"
                    sortable>
                </el-table-column>
                <el-table-column
                    prop="storeys"
                    label="Storeys"
                    sortable>
                </el-table-column>
                <el-table-column
                    prop="garages"
                    label="Garages"
                    sortable>
                </el-table-column>
            </el-table>
        </el-main>
    </el-container>
</template>

<script>
    export default {
        data() {
            return {
                loading: false,
                houses: [],
                form: {
                    name: '',
                    price: [0, 1000000],
                    bedrooms: null,
                    bathrooms: null,
                    storeys: null,
                    garages: null,
                }
            }
        },
        mounted() {
            this.fetchData()
        },
        methods: {
            fetchData() {
                this.loading = true;
                axios.get('api/houses', {
                    params: {
                        ...this.form
                    }
                })
                    .then((res) => {
                        this.houses = res.data;
                    })
                    .catch((err) => {
                        console.error(err)
                    })
                    .then(() => {
                        this.loading = false;
                    })
            },
            clearSearch() {
                this.form = {
                    name: '',
                    price: [0, 1000000],
                    bedrooms: null,
                    bathrooms: null,
                    storeys: null,
                    garages: null,
                };
                this.fetchData();
            }
        }
    }
</script>

<style lang="sass" scoped>
    .aside-form
        padding: 35px 20px 35px 20px
</style>
