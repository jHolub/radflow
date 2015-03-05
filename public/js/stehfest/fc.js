function redraw(){

    dimData = realToDimensionless(t, s);


// bezrozmerny cas    
//    dimData[0]
// bezrozmerne snizeni    
//    dimData[1]

    modelTd = createTd(dimData[0][0], dimData[dimData.length - 1][0]);

    modelData = stehfest(modelTd);
    
    modelSd = new Array;
    
     for (l = 0; l < modelData.length; l++) {
         
       modelSd[l] = modelData[l][1];  
     }

     modelST = realToDimensionless(modelTd, modelSd);

     ploting(modelData, dimData);
        
}