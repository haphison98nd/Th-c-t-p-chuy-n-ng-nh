import React, {Component} from 'react';
import MenuTop from './components/MenuTop';
import tasks from './components/tasks';
import Banner from './components/Banner';

class App extends Component {
    constructor(props){
        super(props);

        this.state = {
           itemnew          : tasks,
           isShowDetail     : false,
        }
        this.clickItemNews = this.clickItemNews.bind(this);
    }

    clickItemNews(){
        this.setState({
            isShowDetail : !this.state.isShowDetail
        });
    }

    render(){

        let items = this.state.itemnew;
        let isShowDetail = this.state.isShowDetail;


        // console.log(items);

        return (
            
            <div className="container">
                
                <MenuTop 
                    listnews        =   {items} 
                    isShowDetail    =   {isShowDetail}  // đây là state show DetailNew chưa
                    clickItemNews   =   {this.clickItemNews} // đây là hàm thay đổi state
s
                >
                </MenuTop>

                <Banner> </Banner>
                
            </div>
        );
    }
}

export default App;
