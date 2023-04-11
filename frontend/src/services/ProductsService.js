import Api from "./Api"

export default {
    getAllProducts() {
        return Api().get('/api/products/getAllProducts')
    },
}
