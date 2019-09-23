import React, {Component} from 'react';

class Partner extends Component {
    constructor(props){
        super(props);

        this.state = {

        }
        this.handleShowListDeal = this.handleShowListDeal.bind(this);
    }

    handleShowListDeal(id){
        this.props.isShowListDeal();
        this.props.itemSelected(id);
    }

    render(){
        let itemp = this.props.itemp;
        let id = this.props.index;
        let isShowListDeal = this.props.isShowListDeal;


        // console.log(itemp.logobig);

        return (
            <div className="col-xs-4"  >
                <div className="item-partner" itemp = {itemp} onClick = {() => this.handleShowListDeal(id)}>
                    <div class="cover">
                        <a href="#">
                            <img src={itemp.logoshop} />
                        </a>
                    </div>
                    
                </div>
            </div>
        );
    }
}

export default Partner;
