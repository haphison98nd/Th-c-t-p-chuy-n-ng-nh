import React, {Component} from 'react';
import Logo from './components/Logo';
import Banner from './components/Banner';
import Partner from './components/Partner';
import DealSale from './components/DealSale';
import BtnSeeMore from './components/BtnSeeMore';
import Footer from './components/Footer';
import ListDeal from './components/ListDeal';
import tasks from './components/tasks';
import partners from './components/partners';


class App extends Component {
    constructor(props){
        super(props);

        this.state = {
            itemdeal          : tasks,
            partners          : partners,
            isShowListDeal    : false,
            itemSelected      : null,
        }
        this.handleShowListDeal = this.handleShowListDeal.bind(this);
        this.itemSelected = this.itemSelected.bind(this);
    }

    handleShowListDeal(){
        this.setState({
            isShowListDeal: !this.state.isShowListDeal
        });
    }

    itemSelected(id){
        this.setState({
            itemChoose : partners
        });
    }

    render(){
        let items = this.state.itemdeal;
        let partners = this.state.partners;
        let isShowListDeal = this.state.isShowListDeal;
        let itemSelected = this.itemSelected;

        let itemChoose = this.state.itemChoose;

        // console.log(items);

        const elmDealSale = items.map((item, index) => {
            return(
                <DealSale
                    key = {index}
                    item = {item}
                    index = {index}
                />
            );
        });

        const elmPartner = partners.map((itemp, index) => {
            return(
                <Partner
                    itemSelected ={itemSelected}
                    isShowListDeal = {this.handleShowListDeal}
                    partners = {partners}
                    key = {index}
                    itemp = {itemp}
                    index = {index}
                />
            );
        });
        if (isShowListDeal === false) {
            return (
                <div>
                    <div className="container">

                        <Logo> </Logo>

                        <Banner> </Banner>

                        <div className="row">
                            <div className="shopping-partner">
                                <div className="col-xs-12">
                                    <div className="title">
                                        <img src="images/SHOPPING-CART.png" />
                                        <span> mua sắm online </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row">
                            <div className="shopping-partner">
                                <div className="container">
                                    {elmPartner}
                                </div>
                            </div>
                        </div>        


                        <div className="row">
                            <div className="col-xs-12">
                                <div className="deal-sale">
                                    <div className="title">
                                        <img src="images/FIRE.png" />
                                        <span> deal giảm giá hot</span>
                                    </div>
                                </div>
                            </div>
                        </div>            

                        {elmDealSale}
                        
                        <BtnSeeMore> </BtnSeeMore>

                    </div>

                    <Footer> </Footer>
                    
                </div>
            );
        }
        else{
            return(
                <ListDeal itemSelected = {() => this.itemSelected(itemChoose)} />
            );
        }
            
    }
}

export default App;
