// import Api from "./Api"
import axios from "axios"

export default {
    async get(id) {
        const response = await axios.get(`http://localhost:8000/api/products/${id}`)
        return response.data
    },
    async put(endpoint, data) {
        const response = await axios.put(`http://localhost:8000/api/products/${endpoint}`, data)
        return response.data
      },

}
