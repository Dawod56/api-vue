import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    user: null,
  },
  mutations: {
    SET_USER(state, user) {
      state.user = user
    },
  },
  actions: {
    async fetchUser({ commit }) {
      try {
        const response = await axios.get('http://localhost:8000/api/user')
        const user = response.data
        commit('SET_USER', user)
      } catch (error) {
        // handle error
      }
    },
  },
  getters: {
    isAuthenticated: state => !!state.user,
  },
})