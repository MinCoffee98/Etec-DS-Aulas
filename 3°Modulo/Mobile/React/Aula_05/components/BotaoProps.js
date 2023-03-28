import React from "react";
import { TouchableOpacity, Text, StyleSheet } from "react-native";

const BotaoProps = ({label, corFundo, onPress, msg}) => {
    const botaoStyle = {
        backgroundColor: corFundo,
        borderColor: 'transparent',
        borderWidth: 0,
        borderRadius: 5,
        paddingVertical: 5,
        width: 200,
        height: 40,
        marginHorizontal: 50,
        marginVertical: 10,
    };

    const handlePress = () =>{
        console.log (msg)
    };

    const styletext ={
        color:"#fff",
        fontSize: 20,
        fontWeight: '700',
    };


    return (
        <TouchableOpacity onPress={handlePress} style = {botaoStyle}>
            <Text style = {styletext}>{label}</Text>
        </TouchableOpacity>
    );
};

export default BotaoProps;