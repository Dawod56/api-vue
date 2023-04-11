// import Api from "./Api"
import axios from "axios"

export default {
    async get(id) {
        const response = await axios.get(`http://localhost:8000/api/products/${id}`)
        return response.data
    },

}
