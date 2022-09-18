//const store = new window.SecureStore.Store('webAppName', $('meta[name="csrf-token"]').attr('content'));
// const store = new window.SecureStore.Store('webAppName', 'ashir');
// let allStores;
// function RunFast(){
//   console.clear();
//   store.clear()
//   store.init().then(() => {
//       FireStoreData();
//       // const allShops=await store.get('shops');
//       // console.log(allShops);
    
//    // ShowData();
 
//     });
//   function FireStoreData() { 
//       $.ajax({
//           url: 'getshopfields',
//           success:   function(result) {
//               store.set('shops',JSON.stringify(result)).then(()=>{console.log('Data saved');console.log(store.get('shops'));}).catch(()=>{console.clear();console.log('Err')});
//           }
//       });
//    }
// }
// function ShowData(){
  
//   //console.log(await store.get('shops'));
  
// }
// RunFast();
// ShowData();
