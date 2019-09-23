import React, {Component} from 'react';
import SearchListDeal from './SearchListDeal';
import SortListDeal from './SortListDeal';
import ItemListDeal from './ItemListDeal';
import Footer from './Footer';

class ListDeal extends Component {
    constructor(props){
        super(props);

        this.state = {

        }
    }


    render(){

        let itemSelected = this.props.itemSelected;

        // console.log(itemSelected);

        return (
            <div className="container">
                <div className="row">
                    <div className="col-xs-12">
                        <div className="logo-shop">
                            <p> Các deal hot nhất tại </p>
                            <img src="images/image1.png" />
                        </div>
                    </div>
                </div>
                
                {/*<SearchListDeal />

                <SortListDeal />*/}

                <ItemListDeal />

                <div className="row">
                    <div className="col-xs-12">
                        <div className="btn-seemore">
                            <button> Xem thêm </button>
                        </div>
                    </div>
                </div>

                <Footer> </Footer>

            </div>
        );
    }
}

export default ListDeal;
