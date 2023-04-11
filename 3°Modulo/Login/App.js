import { StatusBar } from 'expo-status-bar';
import React from 'react';
import Signin from './pages/signin';

export default function App() {
  return (
    <>
      <Signin />
      <StatusBar style="light" />
    </>
  );
}