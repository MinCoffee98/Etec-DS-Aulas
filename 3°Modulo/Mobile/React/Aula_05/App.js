import React from 'react';
import {View, Text, StyleSheet} from 'react-native';
import BotaoProps from './components/BotaoProps';

const App = () => {
  const handlePress = () => {
    console.log ('Botão pressionado');
  }
  return (
    <View style = {styles.container}>
      <Text style = {styles.text}>Aula 04</Text>
      <BotaoProps 
      label = "Vai Palmeiras" 
      corFundo= "#216B34" 
      msg={"Vamos pra cima Porco"}
      />
      <BotaoProps 
      label = "Clique Aqui" 
      corFundo= "#06C986" 
      msg={"Porco come lixo"}
      />
    </View>
  
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    textAlign: 'center',
    backgroundColor: '#EAFEF9',
    flexWrap: 'wrap',
    flexDirection:'row'
   
  },
  text:{
    color: '#10BAC7',
    fontSize: 30,
    fontFamily: 'cursive',
    fontWeight: '700',
    
  }
  
});

export default App;