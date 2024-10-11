<template>
    <div class="login-container">
      <h2>Super Admin Login</h2>
      <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
      </div>
      <form @submit.prevent="submit">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" placeholder="Enter your email" autofocus v-model="form.email" />
          <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" placeholder="Enter your password" v-model="form.password" />
          <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="form-group">
          <button type="submit" class="btn-login">Login</button>
        </div>
      </form>
    </div>
  </template>

  <script setup>
  import InputError from '@/Components/InputError.vue';
  import { Head, Link, useForm } from '@inertiajs/vue3';

  const form = useForm({
      email: '',
      password: '',
      remember: false,
  });

  const submit = () => {
      form.post(route('login'), {
          onFinish: () => form.reset('password'),
      });
  };
  </script>



<style>
/* General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-image: url('https://www.protechguy.com/wp-content/uploads/sites/712/2021/01/bigstock-Closed-Padlock-On-Digital-Back-383628656-scaled.jpg');
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}


/* Login Form Styles */
.login-container {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 300px;
}

h2 {
  margin-bottom: 20px;
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-size: 14px;
  color: #555;
}

input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
}

input[type="email"]:focus,
input[type="password"]:focus {
  outline: none;
  border-color: #007bff;
}

.btn-login {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

.btn-login:hover {
  background-color: #0056b3;
}

</style>

